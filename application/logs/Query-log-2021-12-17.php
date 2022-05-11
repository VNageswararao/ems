select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059859752655029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059859752655029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059859752655029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059859752655029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027360916137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029058456420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025749206542969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059859752655029

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048940181732178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027360916137695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074021816253662

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073099136352539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073099136352539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045449733734131

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0070300102233887

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0070300102233887

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013267993927002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010194063186646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010194063186646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010194063186646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031418800354004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010194063186646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031418800354004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010194063186646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031418800354004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010194063186646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031418800354004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038988590240479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010194063186646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076580047607422

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031418800354004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038988590240479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006878137588501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053310394287109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092530250549316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038559436798096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038559436798096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038559436798096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038559436798096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038559436798096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028138160705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087904930114746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070209503173828

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00036096572875977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='562' and  doctors_registration.office_id= '1' 
 Execution Time:0.0094649791717529

select count(*) as cnt from patient_registration where  patient_registration_id= '562' and  office_id= '1' 
 Execution Time:0.00036096572875977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='562' and  doctors_registration.office_id= '1' 
 Execution Time:0.0094649791717529

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='562' and  office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080299377441406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080299377441406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010879993438721

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043370723724365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043370723724365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043370723724365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027251243591309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043370723724365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027251243591309

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-16' and  '2021-12-16' and  billing_master.office_id= 1        
 Execution Time:0.0012469291687012

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-16' and  '2021-12-16' and  billing_master.office_id= 1        
 Execution Time:0.0012469291687012

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-16' and '2021-12-16' and  patient_registration.office_id= 1      
 Execution Time:0.0037288665771484

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-15' and  '2021-12-15' and  billing_master.office_id= 1        
 Execution Time:0.0039880275726318

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-15' and  '2021-12-15' and  billing_master.office_id= 1        
 Execution Time:0.0039880275726318

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-15' and '2021-12-15' and  patient_registration.office_id= 1      
 Execution Time:0.0053160190582275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069479942321777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069479942321777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069479942321777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069479942321777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069479942321777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026359558105469

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026359558105469

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0047919750213623

select count(*) as cnt from billing_master where  billing_master_id= '626' and  office_id= '1' 
 Execution Time:0.00082588195800781

select count(*) as cnt from billing_master where  billing_master_id= '626' and  office_id= '1' 
 Execution Time:0.00082588195800781

select * from billing_master where  billing_master_id= '626' and  office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from billing_master where  billing_master_id= '626' and  office_id= '1' 
 Execution Time:0.00082588195800781

select * from billing_master where  billing_master_id= '626' and  office_id= '1' 
 Execution Time:0.00044989585876465

select * from billing_detail where  billing_master_id= '626' 
 Execution Time:0.0058219432830811

select count(*) as cnt from billing_master where  billing_master_id= '626' and  office_id= '1' 
 Execution Time:0.00082588195800781

select * from billing_master where  billing_master_id= '626' and  office_id= '1' 
 Execution Time:0.00044989585876465

select * from billing_detail where  billing_master_id= '626' 
 Execution Time:0.0058219432830811

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0070970058441162

select count(*) as cnt from patient_registration where  patient_registration_id= '3494' and  office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '3494' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3494' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066430568695068

select count(*) as cnt from patient_registration where  patient_registration_id= '3494' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3494' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066430568695068

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3494' and  office_id= '1' 
 Execution Time:0.0005948543548584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082278251647949

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082278251647949

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045084953308105

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043041706085205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043041706085205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043041706085205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043041706085205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043041706085205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081889629364014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081889629364014

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081889629364014

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081889629364014

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-15' and  '2021-12-15' and  billing_master.office_id= 1        
 Execution Time:0.0016839504241943

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-15' and  '2021-12-15' and  billing_master.office_id= 1        
 Execution Time:0.0016839504241943

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-15' and '2021-12-15' and  patient_registration.office_id= 1      
 Execution Time:0.0057129859924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011498928070068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011498928070068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011498928070068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011498928070068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011498928070068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047857761383057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035901069641113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035901069641113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035901069641113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035901069641113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035901069641113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053682327270508

select count(*) as cnt from user where  name = 'OPTO' and password = '123' and office_id= '1' 
 Execution Time:0.00045609474182129

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-16' and  '2021-12-16' and  billing_master.office_id= 1        
 Execution Time:0.0016059875488281

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-16' and  '2021-12-16' and  billing_master.office_id= 1        
 Execution Time:0.0016059875488281

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-16' and '2021-12-16' and  patient_registration.office_id= 1      
 Execution Time:0.0055811405181885

select count(*) as cnt from patient_registration where  patient_registration_id= '3561' and  office_id= '1' 
 Execution Time:0.00070786476135254

select count(*) as cnt from patient_registration where  patient_registration_id= '3561' and  office_id= '1' 
 Execution Time:0.00070786476135254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3561' and  doctors_registration.office_id= '1' 
 Execution Time:0.005748987197876

select count(*) as cnt from patient_registration where  patient_registration_id= '3561' and  office_id= '1' 
 Execution Time:0.00070786476135254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3561' and  doctors_registration.office_id= '1' 
 Execution Time:0.005748987197876

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3561' and  office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059318542480469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059318542480469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from complaints where  name = 'REDNESS' and office_id= '1' 
 Execution Time:0.00055885314941406

select count(*) as cnt from complaints where  name = 'PAIN' and office_id= '1' 
 Execution Time:0.00067496299743652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048208236694336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from complaints where  name = 'SWELLING' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from complaints where  name = 'PRICKING SENSATION' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from complaints where  name = 'ITCHING' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036382675170898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036382675170898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041568279266357

select count(*) as cnt from complaints where  name = 'FB SENSATION' and office_id= '1' 
 Execution Time:0.00072407722473145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001223087310791

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001223087310791

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036120414733887

select count(*) as cnt from complaints where  name = 'BURNING SENSATION' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from complaints where  name = 'LID LAG' and office_id= '1' 
 Execution Time:0.00068187713623047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033609867095947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033609867095947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033609867095947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025708675384521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033609867095947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025708675384521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039780139923096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033609867095947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025708675384521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039780139923096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010210037231445

select count(*) as cnt from complaints where  name = 'WATERING' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from complaints where  name = 'DROOPING OF EYELIDS' and office_id= '1' 
 Execution Time:0.00054311752319336

select count(*) as cnt from complaints where  name = 'DISCHARGE' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from complaints where  name = 'STICKINESS OF LASHES' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from complaints where  name = 'INJURY' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from complaints where  name = 'TRAUMA' and office_id= '1' 
 Execution Time:0.00041913986206055

select count(*) as cnt from complaints where  name = 'INSECT BITE' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from complaints where  name = 'DISCOMFORT' and office_id= '1' 
 Execution Time:0.0029559135437012

select count(*) as cnt from complaints where  name = 'INSECT BITE' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from complaints where  name = 'HIT WITH STICK' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from medical_history where  name = 'DM' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from medical_history where  name = 'HTN' and office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from medical_history where  name = 'CAD' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from medical_history where  name = 'COPD' and office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from medical_history where  name = 'Br/ASTHMA' and office_id= '1' 
 Execution Time:0.00086116790771484

select count(*) as cnt from medical_history where  name = 'EPILEPSY' and office_id= '1' 
 Execution Time:0.00080204010009766

select count(*) as cnt from medical_history where  name = 'RHEUMATOID ARTHRTIS' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from medical_history where  name = 'PREGNANCY' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from medical_history where  name = 'MH+' and office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from ophthalmic_history where  name = 'GLASSES' and office_id= '1' 
 Execution Time:0.0006260871887207

select count(*) as cnt from ophthalmic_history where  name = 'GLAUCOMA' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from ophthalmic_history where  name = 'CAT SX' and office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from ophthalmic_history where  name = 'LASIK SX' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from ophthalmic_history where  name = 'AVASTIN' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from ophthalmic_history where  name = 'DCR/DCT' and office_id= '1' 
 Execution Time:0.00086498260498047

select count(*) as cnt from ophthalmic_history where  name = 'OTHER OCULAR HISTORY' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from medical_history where  name = 'OTHER MEDICAL HISTORY' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from current_medication where  name = 'GLAUCOMA E/D' and office_id= '1' 
 Execution Time:0.0020759105682373

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00092005729675293

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00092005729675293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3542' and  doctors_registration.office_id= '1' 
 Execution Time:0.010414838790894

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00092005729675293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3542' and  doctors_registration.office_id= '1' 
 Execution Time:0.010414838790894

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3542' and  office_id= '1' 
 Execution Time:0.00078392028808594

select count(*) as cnt from current_medication where  name = 'LUBRICANTS' and office_id= '1' 
 Execution Time:0.0004417896270752

select count(*) as cnt from current_medication where  name = 'ANTIBIOTICS' and office_id= '1' 
 Execution Time:0.00071096420288086

select count(*) as cnt from current_medication where  name = 'STEROIDS' and office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054478645324707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054478645324707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from dialysis where  name = 'TROPICAMIDE PLUS' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from dialysis where  name = 'PLAIN TROPICAMIDE' and office_id= '1' 
 Execution Time:0.0007169246673584

select count(*) as cnt from dialysis where  name = 'ATROPINE' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from dialysis where  name = 'HOMIDE' and office_id= '1' 
 Execution Time:0.0015058517456055

select count(*) as cnt from dialysis where  name = 'CYCLOPENTOLATE' and office_id= '1' 
 Execution Time:0.0007178783416748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.042854070663452

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.042854070663452

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.049843072891235

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.042854070663452

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026628971099854

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.049843072891235

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3566 
 Execution Time:0.0031929016113281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4532 
 Execution Time:0.0029089450836182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00038790702819824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00038909912109375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.0029640197753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092577934265137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092577934265137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092577934265137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092577934265137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070905685424805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092577934265137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070905685424805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092577934265137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070905685424805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092577934265137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070905685424805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049030780792236

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083348751068115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083348751068115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083348751068115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083348751068115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083348751068115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019268989562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054099559783936

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3542' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054099559783936

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3542' and  office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087404251098633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087404251098633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3542 
 Execution Time:0.0012288093566895

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4533 
 Execution Time:0.00057506561279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.011353015899658

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065391063690186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00057697296142578

SELECT *
FROM `examination`
WHERE `examination_id` = 1 
 Execution Time:0.0007479190826416

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00019598007202148

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3542 
 Execution Time:0.00021219253540039

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00022315979003906

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=1 
 Execution Time:0.00023388862609863

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=1 
 Execution Time:0.00019192695617676

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=1 
 Execution Time:0.00022792816162109

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=1 
 Execution Time:0.0022990703582764

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='1' and office_id='1' 
 Execution Time:0.00035405158996582

select * from examination_chargesdetails where  examination_id= '1' 
 Execution Time:0.0022828578948975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042986869812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041148662567139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020480155944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046730041503906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054061412811279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054061412811279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054061412811279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054061412811279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054061412811279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046329498291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005638599395752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071611404418945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014519691467285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014519691467285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074028968811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006568431854248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006479024887085

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062394142150879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062394142150879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033938884735107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046989917755127

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047600269317627

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076549053192139

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020179748535156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3567 
 Execution Time:0.00083017349243164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4534 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select * from examination where examination_id= '4' and   office_id= '1' 
 Execution Time:0.001471996307373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 4 
 Execution Time:0.00068187713623047

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00049781799316406

select * from examination where examination_id= '4' and   office_id= '1' 
 Execution Time:0.0037240982055664

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 4 
 Execution Time:0.00026702880859375

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.0002129077911377

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00060105323791504

SELECT *
FROM `examination`
WHERE `examination_id` = 4 
 Execution Time:0.0005640983581543

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00020813941955566

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00016403198242188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3567 
 Execution Time:0.00017714500427246

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00018000602722168

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=4 
 Execution Time:0.0004279613494873

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=4 
 Execution Time:0.00025582313537598

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=4 
 Execution Time:0.00025391578674316

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=4 
 Execution Time:0.00025510787963867

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='4' and office_id='1' 
 Execution Time:0.00027704238891602

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00015997886657715

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.000640869140625

SELECT *
FROM `examination`
WHERE `examination_id` = 4 
 Execution Time:0.0010151863098145

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00049090385437012

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00047111511230469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3567 
 Execution Time:0.00039291381835938

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00036501884460449

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=4 
 Execution Time:0.00043296813964844

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=4 
 Execution Time:0.00057888031005859

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=4 
 Execution Time:0.00038480758666992

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=4 
 Execution Time:0.00039291381835938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='4' and office_id='1' 
 Execution Time:0.00044512748718262

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00025486946105957

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00078105926513672

SELECT *
FROM `examination`
WHERE `examination_id` = 4 
 Execution Time:0.0017108917236328

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0007469654083252

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3567 
 Execution Time:0.00034379959106445

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00032401084899902

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='4' and office_id='1' 
 Execution Time:0.00067019462585449

select * from examination_chargesdetails where  examination_id= '4' 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3561 
 Execution Time:0.00063800811767578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4530 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select count(*) as cnt from patient_registration where  patient_registration_id= '3345' and  office_id= '1' 
 Execution Time:0.0028607845306396

select count(*) as cnt from patient_registration where  patient_registration_id= '3345' and  office_id= '1' 
 Execution Time:0.0028607845306396

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3345' and  doctors_registration.office_id= '1' 
 Execution Time:0.0080559253692627

select count(*) as cnt from patient_registration where  patient_registration_id= '3345' and  office_id= '1' 
 Execution Time:0.0028607845306396

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3345' and  doctors_registration.office_id= '1' 
 Execution Time:0.0080559253692627

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3345' and  office_id= '1' 
 Execution Time:0.0031650066375732

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065088272094727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028510093688965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028510093688965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027871131896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028510093688965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027871131896973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027809143066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028510093688965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027871131896973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027809143066406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024428367614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028510093688965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027871131896973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027809143066406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076310634613037

select count(*) as cnt from patient_registration where  patient_registration_id= '3345' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '3345' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3345' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062558650970459

select count(*) as cnt from patient_registration where  patient_registration_id= '3345' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3345' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062558650970459

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3345' and  office_id= '1' 
 Execution Time:0.0020899772644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016169548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068187713623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012428760528564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072948932647705

select count(*) as cnt from patient_registration where  patient_registration_id= '3344' and  office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_registration where  patient_registration_id= '3344' and  office_id= '1' 
 Execution Time:0.00053596496582031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054240226745605

select count(*) as cnt from patient_registration where  patient_registration_id= '3344' and  office_id= '1' 
 Execution Time:0.00053596496582031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3344' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054240226745605

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3344' and  office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061607360839844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_registration where  patient_registration_id= '3343' and  office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_registration where  patient_registration_id= '3343' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3343' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055389404296875

select count(*) as cnt from patient_registration where  patient_registration_id= '3343' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3343' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055389404296875

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3343' and  office_id= '1' 
 Execution Time:0.00036978721618652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058388710021973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058388710021973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065803527832031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032877922058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028088092803955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028088092803955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028219223022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028088092803955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028219223022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028088092803955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028219223022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028088092803955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028219223022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027561187744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029809474945068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028088092803955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028219223022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016591548919678

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028989315032959

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027561187744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011077165603638

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020499229431152

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020499229431152

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030570030212402

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005650520324707

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031518936157227

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075669288635254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3570 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4540 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 562 
 Execution Time:0.00042009353637695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4529 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3570 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4540 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078701972961426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061709880828857

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039577484130859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039577484130859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046396255493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048689842224121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3570 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4540 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052809715270996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052380561828613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052380561828613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012969970703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044107437133789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005601167678833

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3571 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4541 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053811073303223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035409927368164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035409927368164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007781982421875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007781982421875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007781982421875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007781982421875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013868808746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007781982421875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036811828613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009084939956665

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3572 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4542 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022928714752197

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022928714752197

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044083595275879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044083595275879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013840198516846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044083595275879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013840198516846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013220310211182

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044083595275879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013840198516846

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0060081481933594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070459842681885

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3573 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4543 
 Execution Time:0.00023794174194336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3574 
 Execution Time:0.000244140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4544 
 Execution Time:0.0001838207244873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056791305541992

SELECT *
FROM `examination`
WHERE `examination_id` = 15 
 Execution Time:0.00090909004211426

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0012340545654297

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00039482116699219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3574 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00030803680419922

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=15 
 Execution Time:0.00050806999206543

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=15 
 Execution Time:0.00028800964355469

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=15 
 Execution Time:0.00042104721069336

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=15 
 Execution Time:0.0010321140289307

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='15' and office_id='1' 
 Execution Time:0.00055098533630371

select * from examination_chargesdetails where  examination_id= '15' 
 Execution Time:0.00063896179199219

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00054717063903809

SELECT *
FROM `examination`
WHERE `examination_id` = 15 
 Execution Time:0.00072503089904785

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00057196617126465

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00033116340637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3574 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00042605400085449

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=15 
 Execution Time:0.00050806999206543

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=15 
 Execution Time:0.00050592422485352

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=15 
 Execution Time:0.0003209114074707

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=15 
 Execution Time:0.00063800811767578

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='15' and office_id='1' 
 Execution Time:0.00083208084106445

select * from examination_chargesdetails where  examination_id= '15' 
 Execution Time:0.0067720413208008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3570 
 Execution Time:0.00030279159545898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4540 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from user where  name = 'DOCTOR' and password = '123' and office_id= '1' 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030810832977295

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030810832977295

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3570 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4540 
 Execution Time:0.00027179718017578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044703483581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043730735778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062761306762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3573 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4543 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select * from examination where examination_id= '10' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 10 
 Execution Time:0.00060582160949707

select * from examination_chargesdetails where  examination_id= '10' 
 Execution Time:0.00031113624572754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016520023345947

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016520023345947

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031280517578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3572 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4542 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00090408325195312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00029182434082031

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00022411346435547

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067687034606934

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067687034606934

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3542 
 Execution Time:0.00040197372436523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4533 
 Execution Time:0.00055980682373047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select * from examination where examination_id= '3' and   office_id= '1' 
 Execution Time:0.00079512596130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 3 
 Execution Time:0.00045204162597656

select * from examination_chargesdetails where  examination_id= '3' 
 Execution Time:0.00029301643371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3574 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4544 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.00096011161804199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.00041103363037109

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00051498413085938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032615661621094

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0005030632019043

SELECT *
FROM `examination`
WHERE `examination_id` = 17 
 Execution Time:0.00061607360839844

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00044393539428711

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3570 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00029587745666504

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=17 
 Execution Time:0.00046920776367188

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=17 
 Execution Time:0.00038790702819824

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=17 
 Execution Time:0.00031399726867676

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=17 
 Execution Time:0.00020885467529297

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='17' and office_id='1' 
 Execution Time:0.0004429817199707

select * from examination_chargesdetails where  examination_id= '17' 
 Execution Time:0.00016117095947266

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3569 
 Execution Time:0.00040507316589355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4539 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3343 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4538 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3343 
 Execution Time:0.00027322769165039

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4538 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3343 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4538 
 Execution Time:0.00048589706420898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0042810440063477

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3344 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4537 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3345 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4536 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3568 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4535 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3566 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4532 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3566 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4532 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3565 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4531 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3565 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4531 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3561 
 Execution Time:0.00027894973754883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4530 
 Execution Time:0.0004889965057373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 562 
 Execution Time:0.00028586387634277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4529 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0043489933013916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0043489933013916

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0043489933013916

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.00020408630371094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00022792816162109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00035214424133301

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3564 
 Execution Time:0.00038290023803711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4528 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select count(*) as cnt from complaints where  name = 'FOR DL' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from complaints where  name = 'CHECKUP' and office_id= '1' 
 Execution Time:0.001162052154541

select count(*) as cnt from complaints where  name = 'GLARE' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from complaints where  name = 'BLURRING OF DV' and office_id= '1' 
 Execution Time:0.0030341148376465

select count(*) as cnt from complaints where  name = 'BLURRING OF VN' and office_id= '1' 
 Execution Time:0.0015499591827393

select count(*) as cnt from medical_history where  name = 'THYROID' and office_id= '1' 
 Execution Time:0.00036716461181641

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001147985458374

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3572 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4542 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select * from examination where examination_id= '6' and   office_id= '1' 
 Execution Time:0.0011279582977295

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 6 
 Execution Time:0.00053310394287109

select * from examination_chargesdetails where  examination_id= '6' 
 Execution Time:0.00059294700622559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00060701370239258

SELECT *
FROM `examination`
WHERE `examination_id` = 14 
 Execution Time:0.0010261535644531

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00071096420288086

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3572 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00062990188598633

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=14 
 Execution Time:0.00074100494384766

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=14 
 Execution Time:0.00085210800170898

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=14 
 Execution Time:0.00058293342590332

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=14 
 Execution Time:0.00078606605529785

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='14' and office_id='1' 
 Execution Time:0.00096893310546875

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00028300285339355

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.058039903640747

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010781288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010781288146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026321411132812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010781288146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026321411132812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011999607086182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010781288146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026321411132812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011999607086182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065019130706787

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033500194549561

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033500194549561

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029618740081787

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090312957763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090312957763672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025177001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025177001953125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025177001953125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025177001953125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025177001953125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007174015045166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045585632324219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001535177230835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064780712127686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062639713287354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062639713287354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062639713287354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062639713287354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062639713287354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019350051879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048520565032959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048520565032959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016608238220215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048520565032959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016608238220215

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015180110931396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048520565032959

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016608238220215

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015180110931396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091159343719482

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00364089012146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00364089012146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036499500274658

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00364089012146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036499500274658

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3344 
 Execution Time:0.0023739337921143

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4537 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select * from examination where examination_id= '21' and   office_id= '1' 
 Execution Time:0.0034720897674561

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 21 
 Execution Time:0.0039429664611816

select * from examination_chargesdetails where  examination_id= '21' 
 Execution Time:0.0039379596710205

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070309638977051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070309638977051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035569667816162

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3575 
 Execution Time:0.00027108192443848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4545 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068399906158447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3576 
 Execution Time:0.00028395652770996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4546 
 Execution Time:0.0013601779937744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3575 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4545 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00061178207397461

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00061178207397461

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0046470165252686

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00060009956359863

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00060009956359863

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052189826965332

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051689147949219

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070810317993164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070810317993164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014538764953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014538764953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053529739379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053529739379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053529739379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053529739379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053529739379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00070595741271973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.005803108215332

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00070595741271973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.005803108215332

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3577' and  office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00077009201049805

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067551136016846

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067551136016846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067551136016846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067551136016846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067551136016846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0022099018096924

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0022099018096924

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0044898986816406

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00077390670776367

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00077390670776367

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00048089027404785

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00077390670776367

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00048089027404785

select * from billing_detail where  billing_master_id= '648' 
 Execution Time:0.0012311935424805

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00077390670776367

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00048089027404785

select * from billing_detail where  billing_master_id= '648' 
 Execution Time:0.0012311935424805

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044894218444824

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00077390670776367

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00048089027404785

select * from billing_detail where  billing_master_id= '648' 
 Execution Time:0.0012311935424805

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00044894218444824

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00024890899658203

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.0004279613494873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043618679046631

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.0004279613494873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043618679046631

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3577' and  office_id= '1' 
 Execution Time:0.0017218589782715

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0014739036560059

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0014739036560059

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0033738613128662

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00059890747070312

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00059890747070312

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00037908554077148

select * from billing_detail where  billing_master_id= '648' 
 Execution Time:0.00072789192199707

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00059890747070312

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00037908554077148

select * from billing_detail where  billing_master_id= '648' 
 Execution Time:0.00072789192199707

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00035214424133301

select count(*) as cnt from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00059890747070312

select * from billing_master where  billing_master_id= '648' and  office_id= '1' 
 Execution Time:0.00037908554077148

select * from billing_detail where  billing_master_id= '648' 
 Execution Time:0.00072789192199707

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00035214424133301

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00086617469787598

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00086617469787598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052728652954102

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00086617469787598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052728652954102

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3577' and  office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00050210952758789

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00050210952758789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.003148078918457

select count(*) as cnt from patient_registration where  patient_registration_id= '3577' and  office_id= '1' 
 Execution Time:0.00050210952758789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3577' and  doctors_registration.office_id= '1' 
 Execution Time:0.003148078918457

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3577' and  office_id= '1' 
 Execution Time:0.00021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00465989112854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00465989112854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00465989112854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00465989112854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00465989112854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091218948364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091218948364258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070199966430664

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042288303375244

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042288303375244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042288303375244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042288303375244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042288303375244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048890113830566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048890113830566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048890113830566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048890113830566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048890113830566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022721290588379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039315223693848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040719509124756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038814544677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040278434753418

select count(*) as cnt from complaints where  name = 'A SCAN &amp; OCT' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from complaints where  name = 'OCT' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from complaints where  name = 'HFA' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from complaints where  name = 'FUNDUS PHOTO' and office_id= '1' 
 Execution Time:0.00037717819213867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027399063110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027399063110352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0048401355743408

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027399063110352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0048401355743408

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3577 
 Execution Time:0.0011310577392578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4547 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from medicine_category where  name = 'EYE DROPS' and office_id= '1' 
 Execution Time:0.00049281120300293

select count(*) as cnt from medicine_category where  name = 'EYE OINTMENT' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from medicine_category where  name = 'TABLETS' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from medicine_category where  name = 'CAPSULE' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from medicine_category where  name = 'SYRUP' and office_id= '1' 
 Execution Time:0.00067400932312012

select count(*) as cnt from medicine_category where  name = 'OTHERS' and office_id= '1' 
 Execution Time:0.0019850730895996

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.003101110458374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033211708068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004180908203125

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00077319145202637

select count(*) as cnt from medicine_instruction where  name = 'ONE TIME A DAY' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from medicine_instruction where  name = 'TWO TIMES A DAY' and office_id= '1' 
 Execution Time:0.00060606002807617

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select count(*) as cnt from medicine where  name = 'LUBREX E/D' and office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00065803527832031

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00065803527832031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059299468994141

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00065803527832031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059299468994141

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1746' and  office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00081205368041992

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00081205368041992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019688606262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019688606262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019688606262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019688606262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019688606262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019688606262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033061504364014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027198791503906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019688606262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022690296173096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022368431091309

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033061504364014

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00088691711425781

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00088691711425781

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059413909912109

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059413909912109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054216384887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054216384887695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036509037017822

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049638748168945

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036509037017822

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049638748168945

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036509037017822

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0049638748168945

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027170181274414

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 70 
 Execution Time:0.0023319721221924

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 97 
 Execution Time:0.0010299682617188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 70 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 97 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select * from examination where examination_id= '33' and   office_id= '1' 
 Execution Time:0.00084781646728516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 33 
 Execution Time:0.0020878314971924

select * from examination_chargesdetails where  examination_id= '33' 
 Execution Time:0.0017440319061279

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022721290588379

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022721290588379

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067939758300781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 1746 
 Execution Time:0.0004270076751709

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4548 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076007843017578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076007843017578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081992149353027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081992149353027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050549507141113

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078678131103516

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078678131103516

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076889991760254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006680965423584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006242036819458

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092577934265137

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092577934265137

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014700889587402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025088787078857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025088787078857

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025088787078857

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025088787078857

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025088787078857

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037100315093994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014970302581787

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025088787078857

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049304962158203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037100315093994

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092260837554932

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3578 
 Execution Time:0.00071096420288086

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4549 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011839866638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011839866638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060031414031982

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048017501831055

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046515464782715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066139698028564

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018699169158936

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018699169158936

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018699169158936

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3580 
 Execution Time:0.0022540092468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4551 
 Execution Time:0.00089216232299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3579 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4550 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.005277156829834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.005277156829834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.005277156829834

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3581 
 Execution Time:0.00031089782714844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4552 
 Execution Time:0.0051960945129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003870964050293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014631748199463

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014631748199463

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014631748199463

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3581 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4552 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029580593109131

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029580593109131

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021209716796875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010850429534912

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010850429534912

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015249252319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015249252319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015249252319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002187967300415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015249252319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002187967300415

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037848949432373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057191848754883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019969940185547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015249252319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037930011749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002187967300415

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037848949432373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011005878448486

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3581 
 Execution Time:0.00046110153198242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4552 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3582 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4553 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033459663391113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033459663391113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010519027709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033459663391113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010519027709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087192058563232

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033688545227051

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014517068862915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014517068862915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014517068862915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0087368488311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014517068862915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0087368488311768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001920223236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014517068862915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0087368488311768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001920223236084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014517068862915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0087368488311768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001920223236084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002187967300415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0067160129547119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.014517068862915

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0087368488311768

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001920223236084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044839382171631

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002187967300415

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052108764648438

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066518783569336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066518783569336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043392181396484

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070309638977051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077669620513916

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014441013336182

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014441013336182

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001690149307251

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035960674285889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035960674285889

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035960674285889

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035960674285889

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035960674285889

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083069801330566

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034279823303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034568309783936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038061141967773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037939548492432

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034279823303223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072720050811768

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3583 
 Execution Time:0.0002288818359375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4554 
 Execution Time:0.00018119812011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3584 
 Execution Time:0.0016751289367676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4555 
 Execution Time:0.00079703330993652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00077295303344727

SELECT *
FROM `examination`
WHERE `examination_id` = 46 
 Execution Time:0.0008089542388916

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00043606758117676

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00077700614929199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3584 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00032806396484375

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=46 
 Execution Time:0.0004279613494873

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=46 
 Execution Time:0.00032687187194824

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=46 
 Execution Time:0.00031685829162598

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=46 
 Execution Time:0.0012969970703125

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='46' and office_id='1' 
 Execution Time:0.00034689903259277

select * from examination_chargesdetails where  examination_id= '46' 
 Execution Time:0.0010850429534912

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056314468383789

SELECT *
FROM `examination`
WHERE `examination_id` = 46 
 Execution Time:0.00084805488586426

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00045299530029297

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00044703483581543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3584 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00058889389038086

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=46 
 Execution Time:0.00047516822814941

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=46 
 Execution Time:0.00036191940307617

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=46 
 Execution Time:0.0005650520324707

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=46 
 Execution Time:0.00053095817565918

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='46' and office_id='1' 
 Execution Time:0.00097012519836426

select * from examination_chargesdetails where  examination_id= '46' 
 Execution Time:0.00047183036804199

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0015280246734619

SELECT *
FROM `examination`
WHERE `examination_id` = 46 
 Execution Time:0.0010550022125244

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0037658214569092

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0037360191345215

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3584 
 Execution Time:0.0030491352081299

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.0037739276885986

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=46 
 Execution Time:0.003838062286377

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=46 
 Execution Time:0.0043838024139404

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=46 
 Execution Time:0.0024478435516357

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=46 
 Execution Time:0.004025936126709

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='46' and office_id='1' 
 Execution Time:0.0038518905639648

select * from examination_chargesdetails where  examination_id= '46' 
 Execution Time:0.0036289691925049

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00054597854614258

SELECT *
FROM `examination`
WHERE `examination_id` = 46 
 Execution Time:0.00074982643127441

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00029301643371582

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3584 
 Execution Time:0.00029110908508301

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00023198127746582

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=46 
 Execution Time:0.00038909912109375

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=46 
 Execution Time:0.00030612945556641

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=46 
 Execution Time:0.00025701522827148

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=46 
 Execution Time:0.00026583671569824

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='46' and office_id='1' 
 Execution Time:0.00031399726867676

select * from examination_chargesdetails where  examination_id= '46' 
 Execution Time:0.00020694732666016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018560886383057

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018560886383057

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018560886383057

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3587 
 Execution Time:0.0035331249237061

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4558 
 Execution Time:0.00062394142150879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0091619491577148

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0025908946990967

SELECT *
FROM `examination`
WHERE `examination_id` = 47 
 Execution Time:0.003486156463623

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0020179748535156

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00098204612731934

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3587 
 Execution Time:0.002363920211792

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0032219886779785

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=47 
 Execution Time:0.0038521289825439

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=47 
 Execution Time:0.0039470195770264

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=47 
 Execution Time:0.0031170845031738

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=47 
 Execution Time:0.00086116790771484

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='47' and office_id='1' 
 Execution Time:0.0038261413574219

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.0038549900054932

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3586 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4557 
 Execution Time:0.00060892105102539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3583 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4554 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3585 
 Execution Time:0.00036883354187012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4556 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072503089904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072503089904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072503089904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099682807922363

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072503089904785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068109035491943

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022070407867432

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022070407867432

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038211345672607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038211345672607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037431716918945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038211345672607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037431716918945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038211345672607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037431716918945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038211345672607

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037431716918945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037620067596436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007253885269165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0098588466644287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089600086212158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042915344238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072839260101318

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016989707946777

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016989707946777

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002068042755127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002068042755127

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021979808807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018951892852783

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021979808807373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092196464538574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064339637756348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080339908599854

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00068306922912598

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029690265655518

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029690265655518

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043606758117676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3588 
 Execution Time:0.00071191787719727

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4559 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006925106048584

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010027885437012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010027885437012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033121109008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020709037780762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069680213928223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016269683837891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016269683837891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016269683837891

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014510154724121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3589 
 Execution Time:0.0033879280090332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4560 
 Execution Time:0.0020580291748047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0051970481872559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3591 
 Execution Time:0.00078392028808594

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4562 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026559829711914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027370452880859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026559829711914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3590 
 Execution Time:0.0032188892364502

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4561 
 Execution Time:0.0028731822967529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3591 
 Execution Time:0.00026583671569824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4562 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0019638538360596

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011799335479736

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011799335479736

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 70 
 Execution Time:0.00049591064453125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 97 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select * from examination where examination_id= '33' and   office_id= '1' 
 Execution Time:0.001474142074585

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 33 
 Execution Time:0.01475715637207

select * from examination_chargesdetails where  examination_id= '33' 
 Execution Time:0.024995803833008

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.016165971755981

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.016165971755981

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0040230751037598

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.011101007461548

select count(*) as cnt from medicine_instruction where  name = '3 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00088405609130859

select count(*) as cnt from medicine_instruction where  name = '4 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from medicine_instruction where  name = '6 TIMES A DAY' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from medicine_instruction where  name = '8 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00041913986206055

select count(*) as cnt from medicine_instruction where  name = '2 TIMES A DAY' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from medicine_instruction where  name = '1 TIME A DAY' and office_id= '1' 
 Execution Time:0.0026910305023193

select count(*) as cnt from medicine_instruction where  name = '3 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00051307678222656

select * from medicine_instruction where medicine_instruction_id='2' and office_id= '1' 
 Execution Time:0.00058412551879883

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select * from medicine_instruction where medicine_instruction_id='2' and office_id= '1' 
 Execution Time:0.00054192543029785

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select count(*) as cnt from medicine_instruction where  name = '2 TIMES BEFORE FOOD' and office_id= '1' 
 Execution Time:0.0014879703521729

select count(*) as cnt from medicine_instruction where  name = '2 TIMES AFTER FOOD' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from medicine_instruction where  name = 'ONLY AT NIGHT AFTER FOOD' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from medicine_instruction where  name = '3 TIMES A DAY AFTER FOOD' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from medicine_instruction where  name = '3 TIMES A DAY BEFORE FOOD' and office_id= '1' 
 Execution Time:0.00065207481384277

select * from medicine_instruction where medicine_instruction_id='13' and office_id= '1' 
 Execution Time:0.0048549175262451

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select * from medicine_instruction where medicine_instruction_id='12' and office_id= '1' 
 Execution Time:0.0012638568878174

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select * from medicine_instruction where medicine_instruction_id='11' and office_id= '1' 
 Execution Time:0.00056004524230957

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039331912994385

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039331912994385

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033528804779053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033528804779053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033528804779053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003216028213501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002748966217041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033528804779053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003216028213501

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072910785675049

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from medicine where  name = 'LUBREX' and office_id= '1' 
 Execution Time:0.0030999183654785

select count(*) as cnt from medicine where  name = 'LUBEX DS' and office_id= '1' 
 Execution Time:0.00057888031005859

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select * from medicine_instruction where medicine_instruction_id='4' and office_id= '1' 
 Execution Time:0.00045490264892578

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select * from medicine_instruction where medicine_instruction_id='5' and office_id= '1' 
 Execution Time:0.00046610832214355

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016024112701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016024112701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016024112701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016961097717285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016024112701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016961097717285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016024112701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016961097717285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select * from medicine_instruction where medicine_instruction_id='7' and office_id= '1' 
 Execution Time:0.0026299953460693

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.001924991607666

select count(*) as cnt from patient_registration where  patient_registration_id= '3591' and  office_id= '1' 
 Execution Time:0.0021669864654541

select count(*) as cnt from patient_registration where  patient_registration_id= '3591' and  office_id= '1' 
 Execution Time:0.0021669864654541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3591' and  doctors_registration.office_id= '1' 
 Execution Time:0.0064420700073242

select count(*) as cnt from patient_registration where  patient_registration_id= '3591' and  office_id= '1' 
 Execution Time:0.0021669864654541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3591' and  doctors_registration.office_id= '1' 
 Execution Time:0.0064420700073242

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3591' and  office_id= '1' 
 Execution Time:0.0073628425598145

select * from medicine_instruction where medicine_instruction_id='6' and office_id= '1' 
 Execution Time:0.00047993659973145

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0017411708831787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030050277709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030050277709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030050277709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030050277709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030050277709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087809562683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053420066833496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095360279083252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095360279083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095360279083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095360279083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095360279083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select count(*) as cnt from patient_registration where  patient_registration_id= '3591' and  office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from patient_registration where  patient_registration_id= '3591' and  office_id= '1' 
 Execution Time:0.00037217140197754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3591' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031030178070068

select count(*) as cnt from patient_registration where  patient_registration_id= '3591' and  office_id= '1' 
 Execution Time:0.00037217140197754

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3591' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031030178070068

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3591' and  office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023081302642822

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023081302642822

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078740119934082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078740119934082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078740119934082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078740119934082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078740119934082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select count(*) as cnt from medicine where  name = 'EXTRALUBE' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from medicine where  name = 'ENLUBE' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from medicine where  name = 'LUBIA' and office_id= '1' 
 Execution Time:0.00067019462585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071358680725098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054280757904053

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054280757904053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054280757904053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054280757904053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054280757904053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select count(*) as cnt from medicine_instruction where  name = '3 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from medicine_instruction where  name = '3 TIMES A DAY' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from medicine_instruction where  name = '3 TIMES' and office_id= '1' 
 Execution Time:0.00030112266540527

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from medicine where  name = 'MOXIGRAM E/D' and office_id= '1' 
 Execution Time:0.00034785270690918

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select count(*) as cnt from medicine where  name = '4 QUIN E/D' and office_id= '1' 
 Execution Time:0.00044107437133789

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select count(*) as cnt from medicine_instruction where  name = '2 TIMES A DAY' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from medicine_instruction where  name = '2 TIMES' and office_id= '1' 
 Execution Time:0.00045895576477051

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select count(*) as cnt from medicine where  name = 'NEPATOP E/D' and office_id= '1' 
 Execution Time:0.00043487548828125

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from medicine where  name = 'MOXIGRAM LX E/D' and office_id= '1' 
 Execution Time:0.00035810470581055

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select count(*) as cnt from medicine where  name = '4 QUIN LOT E/D' and office_id= '1' 
 Execution Time:0.00078392028808594

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select count(*) as cnt from medicine where  name = '4 QUIN D E/D' and office_id= '1' 
 Execution Time:0.00041699409484863

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select count(*) as cnt from medicine where  name = 'MOXIGRAM D E/D' and office_id= '1' 
 Execution Time:0.0003669261932373

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from medicine where  name = 'FLUBI E/D' and office_id= '1' 
 Execution Time:0.00046205520629883

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select count(*) as cnt from medicine where  name = 'FBN E/D' and office_id= '1' 
 Execution Time:0.00046300888061523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from medicine where  name = 'ENMOX KT E/D' and office_id= '1' 
 Execution Time:0.00070309638977051

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from medicine where  name = 'ENGAT E/D' and office_id= '1' 
 Execution Time:0.00049090385437012

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3592 
 Execution Time:0.00033307075500488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4563 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select count(*) as cnt from medicine where  name = 'MOXIA E/D' and office_id= '1' 
 Execution Time:0.00046801567077637

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0017349720001221

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.0017349720001221

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0008399486541748

SELECT *
FROM `examination`
WHERE `examination_id` = 58 
 Execution Time:0.00098299980163574

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00081706047058105

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00055980682373047

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3592 
 Execution Time:0.00040912628173828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00066208839416504

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=58 
 Execution Time:0.00077700614929199

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=58 
 Execution Time:0.00042104721069336

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=58 
 Execution Time:0.00039482116699219

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=58 
 Execution Time:0.00055599212646484

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='58' and office_id='1' 
 Execution Time:0.00059103965759277

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00045013427734375

select count(*) as cnt from medicine where  name = 'ENGAT E/D' and office_id= '1' 
 Execution Time:0.0023751258850098

select count(*) as cnt from medicine where  name = 'ENGAT E/D' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from medicine where  name = 'ENMOX' and office_id= '1' 
 Execution Time:0.00041389465332031

select * from medicine where medicine_id='6' and office_id= '1' 
 Execution Time:0.00055098533630371

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select count(*) as cnt from medicine where  name = 'MOXIA D E/D' and office_id= '1' 
 Execution Time:0.0008540153503418

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select count(*) as cnt from medicine where  name = 'GATIA E/D' and office_id= '1' 
 Execution Time:0.0004270076751709

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select count(*) as cnt from medicine where  name = 'OLDIA E/D' and office_id= '1' 
 Execution Time:0.00041508674621582

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from medicine where  name = 'OLO PLUS E/D' and office_id= '1' 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069904327392578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045590400695801

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0008690357208252

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0008690357208252

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010550022125244

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010550022125244

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073320865631104

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071120262145996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071120262145996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071120262145996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3592 
 Execution Time:0.0006110668182373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4563 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00081610679626465

SELECT *
FROM `examination`
WHERE `examination_id` = 58 
 Execution Time:0.0006709098815918

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00034117698669434

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3592 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00023317337036133

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=58 
 Execution Time:0.0007319450378418

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=58 
 Execution Time:0.00067305564880371

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=58 
 Execution Time:0.00076484680175781

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=58 
 Execution Time:0.00058293342590332

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='58' and office_id='1' 
 Execution Time:0.00043606758117676

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001060962677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001060962677002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001060962677002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001060962677002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014381408691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011301040649414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099015235900879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001060962677002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014381408691406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010016918182373

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0084011554718018

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0084011554718018

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0015161037445068

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0015161037445068

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024261474609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024261474609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024261474609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024261474609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095915794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026829242706299

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024261474609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095915794372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010361671447754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010361671447754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010361671447754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.00066494941711426

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 98 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 98 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select * from examination where examination_id= '34' and   office_id= '1' 
 Execution Time:0.00083494186401367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 34 
 Execution Time:0.00050115585327148

select * from examination_chargesdetails where  examination_id= '34' 
 Execution Time:0.00054788589477539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010559558868408

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010390281677246

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093793869018555

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009920597076416

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00060081481933594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 71 
 Execution Time:0.00045919418334961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 98 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select * from examination where examination_id= '34' and   office_id= '1' 
 Execution Time:0.0016608238220215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 34 
 Execution Time:0.00039100646972656

select * from examination_chargesdetails where  examination_id= '34' 
 Execution Time:0.00028204917907715

select * from examination where examination_id= '34' and   office_id= '1' 
 Execution Time:0.0016608238220215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 34 
 Execution Time:0.00039100646972656

select * from examination_chargesdetails where  examination_id= '34' 
 Execution Time:0.00028204917907715

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3593 
 Execution Time:0.001183032989502

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4564 
 Execution Time:0.0021419525146484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00065708160400391

SELECT *
FROM `examination`
WHERE `examination_id` = 59 
 Execution Time:0.00092101097106934

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00033187866210938

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00042390823364258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3593 
 Execution Time:0.00032615661621094

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0003361701965332

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=59 
 Execution Time:0.00040292739868164

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=59 
 Execution Time:0.00031399726867676

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=59 
 Execution Time:0.00029492378234863

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=59 
 Execution Time:0.00070405006408691

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='59' and office_id='1' 
 Execution Time:0.00027894973754883

select * from examination_chargesdetails where  examination_id= '59' 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021741390228271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021741390228271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021741390228271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035741329193115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021741390228271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035741329193115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018610954284668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021741390228271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035741329193115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018610954284668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036740303039551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021741390228271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026259422302246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035741329193115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018610954284668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036740303039551

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01102089881897

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074195861816406

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076603889465332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036311149597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004525899887085

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051784515380859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071790218353271

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3594 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4565 
 Execution Time:0.00085306167602539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022411346435547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060796737670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3594' and  office_id= '1' 
 Execution Time:0.00041818618774414

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3591' and  office_id= '1' 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012791156768799

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001054048538208

select count(*) as cnt from patient_registration where  patient_registration_id= '3593' and  office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from patient_registration where  patient_registration_id= '3593' and  office_id= '1' 
 Execution Time:0.00059700012207031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3593' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049369335174561

select count(*) as cnt from patient_registration where  patient_registration_id= '3593' and  office_id= '1' 
 Execution Time:0.00059700012207031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3593' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049369335174561

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3593' and  office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037221908569336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037221908569336

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076913833618164

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080158710479736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080158710479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080158710479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080158710479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080158710479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057816505432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057816505432129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060501098632812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051784515380859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076589584350586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074830055236816

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3594' and  office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from patient_followup where  patient_registration_id = '3594' and patient_followup_date='2021-12-18' and office_id= '1' 
 Execution Time:0.00050210952758789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014781951904297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014781951904297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3594 
 Execution Time:0.00066518783569336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4565 
 Execution Time:0.00041723251342773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028707981109619

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028707981109619

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028707981109619

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3594 
 Execution Time:0.00041890144348145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4565 
 Execution Time:0.00075292587280273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3594 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4565 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3594 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4565 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3594 
 Execution Time:0.00046992301940918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4565 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0007171630859375

SELECT *
FROM `examination`
WHERE `examination_id` = 60 
 Execution Time:0.00085115432739258

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 5 
 Execution Time:0.0005040168762207

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3594 
 Execution Time:0.00030112266540527

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00064182281494141

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=60 
 Execution Time:0.00064182281494141

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=60 
 Execution Time:0.00050997734069824

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=60 
 Execution Time:0.00038790702819824

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=60 
 Execution Time:0.0005190372467041

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='60' and office_id='1' 
 Execution Time:0.00068092346191406

select * from examination_chargesdetails where  examination_id= '60' 
 Execution Time:0.00038814544677734

select * from examination where examination_id= '60' and   office_id= '1' 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 60 
 Execution Time:0.0013918876647949

select * from examination_chargesdetails where  examination_id= '60' 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018742084503174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018742084503174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018742084503174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018742084503174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037338733673096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058038234710693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027840137481689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018742084503174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017170906066895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018351078033447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037338733673096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011352062225342

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003119945526123

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003119945526123

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037400722503662

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014519691467285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014495849609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045740604400635

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032238960266113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032238960266113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038721561431885

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032238960266113

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3595 
 Execution Time:0.0030269622802734

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4566 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001988410949707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080380439758301

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094103813171387

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094103813171387

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010550022125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023632049560547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023632049560547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048530101776123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023632049560547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048530101776123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027000904083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023632049560547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048530101776123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027000904083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023632049560547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048530101776123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027000904083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023632049560547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048530101776123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027000904083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029950141906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023632049560547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048530101776123

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027000904083252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013940334320068

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097880363464355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3596 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4567 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3596 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4567 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020790100097656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064239501953125

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0027971267700195

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0027971267700195

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0056881904602051

select count(*) as cnt from patient_registration where  patient_registration_id= '3595' and  office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_registration where  patient_registration_id= '3595' and  office_id= '1' 
 Execution Time:0.00032591819763184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029549598693848

select count(*) as cnt from patient_registration where  patient_registration_id= '3595' and  office_id= '1' 
 Execution Time:0.00032591819763184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029549598693848

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3595' and  office_id= '1' 
 Execution Time:0.0002138614654541

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038385391235352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037503242492676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3595 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4568 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099396705627441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099396705627441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099396705627441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3595 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4568 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022740364074707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064420700073242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064420700073242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028586387634277

select * from examination where examination_id= '64' and   office_id= '1' 
 Execution Time:0.00057077407836914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 64 
 Execution Time:0.00075578689575195

select * from examination_chargesdetails where  examination_id= '64' 
 Execution Time:0.0021481513977051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015468597412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3542 
 Execution Time:0.00025606155395508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4533 
 Execution Time:0.00016188621520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select * from examination where examination_id= '1' and   office_id= '1' 
 Execution Time:0.00090885162353516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 1 
 Execution Time:0.00042414665222168

select * from examination_chargesdetails where  examination_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092601776123047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052380561828613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3595 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4568 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027918815612793

select * from examination where examination_id= '64' and   office_id= '1' 
 Execution Time:0.00063204765319824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 64 
 Execution Time:0.00046396255493164

select * from examination_chargesdetails where  examination_id= '64' 
 Execution Time:0.00030779838562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 3595 
 Execution Time:0.00030517578125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 4568 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select * from examination where examination_id= '64' and   office_id= '1' 
 Execution Time:0.00061798095703125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 64 
 Execution Time:0.00017094612121582

select * from examination_chargesdetails where  examination_id= '64' 
 Execution Time:0.0001370906829834

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508


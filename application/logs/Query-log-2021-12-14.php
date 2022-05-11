select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043129920959473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043129920959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002518892288208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043129920959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002518892288208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043129920959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002518892288208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043129920959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002518892288208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025291442871094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043129920959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002518892288208

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022308826446533

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025291442871094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062179565429688

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056982040405273

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056982040405273

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.002223014831543

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.002223014831543

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0059609413146973

select count(*) as cnt from patient_registration where  patient_registration_id= '2471' and  office_id= '1' 
 Execution Time:0.00070977210998535

select count(*) as cnt from patient_registration where  patient_registration_id= '2471' and  office_id= '1' 
 Execution Time:0.00070977210998535

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2471' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047988891601562

select count(*) as cnt from patient_registration where  patient_registration_id= '2471' and  office_id= '1' 
 Execution Time:0.00070977210998535

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2471' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047988891601562

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2471' and  office_id= '1' 
 Execution Time:0.0003511905670166

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096797943115234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096797943115234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01131796836853

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01131796836853

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01131796836853

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0083069801330566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01131796836853

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0083069801330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01131796836853

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0083069801330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01131796836853

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0083069801330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041439533233643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01131796836853

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0083069801330566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041439533233643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069620609283447

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026049613952637

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0026049613952637

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0050640106201172

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.0005040168762207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057399272918701

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.0005040168762207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057399272918701

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='408' and  office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011770725250244

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011770725250244

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085282325744629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086784362792969

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085282325744629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005911111831665

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063920021057129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063920021057129

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083398818969727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083398818969727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021886825561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042414665222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063586235046387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063586235046387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063586235046387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063586235046387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049059391021729

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039308071136475

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065708160400391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065708160400391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00038790702819824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033211708068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046079158782959

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034880638122559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034880638122559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072469711303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068750381469727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068750381469727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068750381469727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026748180389404

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068750381469727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026748180389404

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0075411796569824

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-13' and  '2021-12-13' and  billing_master.office_id= 1        
 Execution Time:0.0012681484222412

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-13' and  '2021-12-13' and  billing_master.office_id= 1        
 Execution Time:0.0012681484222412

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-13' and '2021-12-13' and  patient_registration.office_id= 1      
 Execution Time:0.0035231113433838

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005979061126709

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029516220092773

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029516220092773

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002448558807373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004267692565918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004267692565918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005791187286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005791187286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005791187286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005791187286377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004878044128418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005702018737793

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020620822906494

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011940002441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067019462585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067019462585449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043990612030029

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051617622375488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051617622375488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063149929046631

select count(*) as cnt from patient_registration where  patient_registration_id= '2462' and  office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from patient_registration where  patient_registration_id= '2462' and  office_id= '1' 
 Execution Time:0.00036191940307617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039119720458984

select count(*) as cnt from patient_registration where  patient_registration_id= '2462' and  office_id= '1' 
 Execution Time:0.00036191940307617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039119720458984

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2462' and  office_id= '1' 
 Execution Time:0.00022792816162109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071215629577637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071215629577637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012481212615967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085399150848389

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048589706420898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067319869995117

select count(*) as cnt from patient_registration where  patient_registration_id= '3071' and  office_id= '1' 
 Execution Time:0.00098586082458496

select count(*) as cnt from patient_registration where  patient_registration_id= '3071' and  office_id= '1' 
 Execution Time:0.00098586082458496

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3071' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059018135070801

select count(*) as cnt from patient_registration where  patient_registration_id= '3071' and  office_id= '1' 
 Execution Time:0.00098586082458496

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3071' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059018135070801

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3071' and  office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010640621185303

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010640621185303

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066304206848145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049710273742676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042691230773926

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039880275726318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010330677032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010330677032471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010330677032471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022399425506592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010330677032471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022399425506592

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015370845794678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010330677032471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022399425506592

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015370845794678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065031051635742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013298988342285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013298988342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067901611328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013298988342285

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select count(*) as cnt from patient_registration where  patient_registration_id= '3450' and  office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from patient_registration where  patient_registration_id= '3450' and  office_id= '1' 
 Execution Time:0.00036311149597168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033290386199951

select count(*) as cnt from patient_registration where  patient_registration_id= '3450' and  office_id= '1' 
 Execution Time:0.00036311149597168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033290386199951

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3450' and  office_id= '1' 
 Execution Time:0.0010480880737305

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023770332336426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023770332336426

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069169998168945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041913986206055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043962001800537

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032496452331543

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038352012634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038352012634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025107860565186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038352012634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025107860565186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038352012634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025107860565186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059499740600586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00394606590271

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092792510986328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037639141082764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038352012634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025107860565186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026059150695801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059499740600586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0099468231201172

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063514709472656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063514709472656

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039887428283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044081211090088

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011200904846191

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011200904846191

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010619163513184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010619163513184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016191005706787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017741203308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017741203308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017741203308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017741203308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017741203308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017741203308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017741203308105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062990188598633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050091743469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041940212249756

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044012069702148

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010149478912354

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010149478912354

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097084045410156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011765003204346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097084045410156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010416030883789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057601928710938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00075197219848633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035691261291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070638656616211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070638656616211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070638656616211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070638656616211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070638656616211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select count(*) as cnt from patient_registration where  patient_registration_id= '3462' and  office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_registration where  patient_registration_id= '3462' and  office_id= '1' 
 Execution Time:0.0004119873046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031599998474121

select count(*) as cnt from patient_registration where  patient_registration_id= '3462' and  office_id= '1' 
 Execution Time:0.0004119873046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3462' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031599998474121

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3462' and  office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084495544433594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084495544433594

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00069689750671387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071570873260498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071570873260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071570873260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071570873260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071570873260498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059008598327637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062301158905029

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043988227844238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092220306396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092220306396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092220306396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092220306396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092220306396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092220306396484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069210529327393

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00069117546081543

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00069117546081543

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016000270843506

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016000270843506

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013880729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042169094085693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042169094085693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042169094085693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042169094085693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042169094085693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033960342407227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042169094085693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032958984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033960342407227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071117877960205

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055718421936035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055718421936035

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063180923461914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063180923461914

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038385391235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062661170959473

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010011196136475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010011196136475

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077319145202637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094318389892578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094318389892578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044291019439697

select count(*) as cnt from patient_registration where  patient_registration_id= '1833' and  office_id= '1' 
 Execution Time:0.0015189647674561

select count(*) as cnt from patient_registration where  patient_registration_id= '1833' and  office_id= '1' 
 Execution Time:0.0015189647674561

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053479671478271

select count(*) as cnt from patient_registration where  patient_registration_id= '1833' and  office_id= '1' 
 Execution Time:0.0015189647674561

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053479671478271

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1833' and  office_id= '1' 
 Execution Time:0.00039219856262207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015759468078613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015759468078613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013449192047119

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050806999206543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044822692871094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044822692871094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044822692871094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044822692871094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044822692871094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045511722564697

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0063109397888184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0063109397888184

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064492225646973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041580200195312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041580200195312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036120414733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040321350097656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043718814849854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056960582733154

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056960582733154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057077407836914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056960582733154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057077407836914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056960582733154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057077407836914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056960582733154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057077407836914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_registration where  patient_registration_id= '1833' and  office_id= '1' 
 Execution Time:0.00098991394042969

select count(*) as cnt from patient_registration where  patient_registration_id= '1833' and  office_id= '1' 
 Execution Time:0.00098991394042969

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054810047149658

select count(*) as cnt from patient_registration where  patient_registration_id= '1833' and  office_id= '1' 
 Execution Time:0.00098991394042969

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054810047149658

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1833' and  office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011510848999023

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011510848999023

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064358711242676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064358711242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064358711242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064358711242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064358711242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087969303131104

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028879642486572

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028879642486572

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013329982757568

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011718273162842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011718273162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011718273162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011718273162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011022090911865

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013101100921631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011718273162842

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007239818572998

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032329559326172

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032329559326172

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073890686035156

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051999092102051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083208084106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083208084106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083208084106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083208084106445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065851211547852

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057101249694824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057101249694824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033712387084961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006976842880249

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027179718017578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057792663574219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038077831268311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038077831268311

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038077831268311

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003795862197876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042369365692139

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038230419158936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038590431213379

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038077831268311

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003795862197876

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089750289916992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031869411468506

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031869411468506

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040698051452637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010199546813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004417896270752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010199546813965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071399211883545

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065340995788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_registration where  patient_registration_id= '3463' and  office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from patient_registration where  patient_registration_id= '3463' and  office_id= '1' 
 Execution Time:0.00050592422485352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3463' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047030448913574

select count(*) as cnt from patient_registration where  patient_registration_id= '3463' and  office_id= '1' 
 Execution Time:0.00050592422485352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3463' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047030448913574

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3463' and  office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028586387634277

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00081896781921387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057599544525146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057599544525146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057599544525146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057599544525146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057599544525146

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003969669342041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050878524780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062699317932129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070714950561523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070714950561523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046870708465576

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026392936706543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024199485778809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001666784286499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039210319519043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069758892059326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069758892059326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069758892059326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069758892059326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069758892059326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097479820251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065460205078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066750049591064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066750049591064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066750049591064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029067993164062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066750049591064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029067993164062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066750049591064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029067993164062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3467' and  doctors_registration.office_id= '1' 
 Execution Time:0.01127290725708

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3467' and  doctors_registration.office_id= '1' 
 Execution Time:0.01127290725708

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3467' and  office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00090599060058594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066239833831787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003511905670166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071759223937988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056231021881104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056231021881104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056231021881104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056231021881104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056231021881104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select count(*) as cnt from patient_registration where  patient_registration_id= '3456' and  office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from patient_registration where  patient_registration_id= '3456' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3456' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050449371337891

select count(*) as cnt from patient_registration where  patient_registration_id= '3456' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3456' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050449371337891

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3456' and  office_id= '1' 
 Execution Time:0.00081992149353027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.010140895843506

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.010140895843506

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034499168395996

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0008549690246582

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00061511993408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068180561065674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068180561065674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068180561065674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068180561065674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068180561065674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033400058746338

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001060962677002

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042281150817871

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010910034179688

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010910034179688

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050687789916992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052905082702637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052905082702637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052905082702637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052905082702637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093293190002441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073471069335938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024399757385254

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024399757385254

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008540153503418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033879280090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010831356048584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061202049255371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010831356048584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069589614868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053589344024658

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053589344024658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053589344024658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053589344024658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053589344024658

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_registration where  patient_registration_id= '3477' and  office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from patient_registration where  patient_registration_id= '3477' and  office_id= '1' 
 Execution Time:0.00062084197998047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3477' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057549476623535

select count(*) as cnt from patient_registration where  patient_registration_id= '3477' and  office_id= '1' 
 Execution Time:0.00062084197998047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3477' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057549476623535

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3477' and  office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091218948364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091218948364258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039219856262207

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00068020820617676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070931911468506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070931911468506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.017963171005249

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070931911468506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.017963171005249

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070931911468506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.017963171005249

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070931911468506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.017963171005249

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032699108123779

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002004861831665

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069999694824219

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037598609924316

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050806999206543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020122528076172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020122528076172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020122528076172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020122528076172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051212310791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037901401519775

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043869018554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043869018554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043869018554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043869018554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043869018554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069389343261719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078690052032471

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078690052032471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019810199737549

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078690052032471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019810199737549

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078690052032471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019810199737549

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078690052032471

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019810199737549

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030641555786133

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030641555786133

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3479' and  office_id= '1' 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004004955291748

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00054788589477539

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00054788589477539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076451301574707

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000701904296875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095915794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010640621185303

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095915794372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046858787536621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from patient_registration where  patient_registration_id= '446' and  office_id= '1' 
 Execution Time:0.0032570362091064

select count(*) as cnt from patient_registration where  patient_registration_id= '446' and  office_id= '1' 
 Execution Time:0.0032570362091064

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='446' and  doctors_registration.office_id= '1' 
 Execution Time:0.01754093170166

select count(*) as cnt from patient_registration where  patient_registration_id= '446' and  office_id= '1' 
 Execution Time:0.0032570362091064

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='446' and  doctors_registration.office_id= '1' 
 Execution Time:0.01754093170166

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='446' and  office_id= '1' 
 Execution Time:0.00092697143554688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082588195800781

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082588195800781

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033783912658691

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00085091590881348

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043959617614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043959617614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043959617614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043959617614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043959617614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004518985748291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01010799407959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064420700073242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064420700073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00080204010009766

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00080204010009766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079760551452637

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00080204010009766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079760551452637

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3479' and  office_id= '1' 
 Execution Time:0.0047030448913574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00048112869262695

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00080513954162598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069260597229004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069260597229004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069260597229004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069260597229004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069260597229004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063204765319824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075292587280273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066370964050293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049281120300293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049281120300293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010740756988525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010740756988525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010740756988525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010740756988525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010740756988525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079391002655029

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002140998840332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067059993743896

select count(*) as cnt from patient_registration where  patient_registration_id= '3334' and  office_id= '1' 
 Execution Time:0.0040068626403809

select count(*) as cnt from patient_registration where  patient_registration_id= '3334' and  office_id= '1' 
 Execution Time:0.0040068626403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3334' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057888031005859

select count(*) as cnt from patient_registration where  patient_registration_id= '3334' and  office_id= '1' 
 Execution Time:0.0040068626403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3334' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057888031005859

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3334' and  office_id= '1' 
 Execution Time:0.0037901401519775

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070099830627441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070099830627441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070099830627441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070099830627441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070099830627441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048308372497559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070228576660156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070228576660156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011237144470215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070228576660156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011237144470215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0078661441802979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070228576660156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011237144470215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0078661441802979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070228576660156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011237144470215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0078661441802979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034523010253906

select count(*) as cnt from patient_registration where  patient_registration_id= '3480' and  office_id= '1' 
 Execution Time:0.0010440349578857

select count(*) as cnt from patient_registration where  patient_registration_id= '3480' and  office_id= '1' 
 Execution Time:0.0010440349578857

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3480' and  doctors_registration.office_id= '1' 
 Execution Time:0.005155086517334

select count(*) as cnt from patient_registration where  patient_registration_id= '3480' and  office_id= '1' 
 Execution Time:0.0010440349578857

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3480' and  doctors_registration.office_id= '1' 
 Execution Time:0.005155086517334

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3480' and  office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012490749359131

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012490749359131

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048069953918457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048069953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048069953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048069953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048069953918457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00094389915466309

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00094389915466309

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068283081054688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068283081054688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010471343994141

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055193901062012

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.006540060043335

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051116943359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059149265289307

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003209114074707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074019432067871

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038814544677734

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037884712219238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080330371856689

select count(*) as cnt from patient_registration where  patient_registration_id= '2936' and  office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from patient_registration where  patient_registration_id= '2936' and  office_id= '1' 
 Execution Time:0.00044703483581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2936' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048389434814453

select count(*) as cnt from patient_registration where  patient_registration_id= '2936' and  office_id= '1' 
 Execution Time:0.00044703483581543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2936' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048389434814453

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2936' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0070991516113281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058698654174805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007479190826416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048050880432129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036811828613281

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034022331237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034022331237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034022331237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034022331237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018870830535889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034022331237793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072598457336426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066330432891846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017189979553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023794174194336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056800842285156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029277801513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030088424682617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040788650512695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072009563446045

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072009563446045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072009563446045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072009563446045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072009563446045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001230001449585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001129150390625

select count(*) as cnt from patient_registration where  patient_registration_id= '2936' and  office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_registration where  patient_registration_id= '2936' and  office_id= '1' 
 Execution Time:0.00057005882263184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2936' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061049461364746

select count(*) as cnt from patient_registration where  patient_registration_id= '2936' and  office_id= '1' 
 Execution Time:0.00057005882263184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2936' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061049461364746

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2936' and  office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012178421020508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012178421020508

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042486190795898

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0006098747253418

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00075912475585938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008152961730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008152961730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008152961730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008152961730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008152961730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015082359313965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015082359313965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014381408691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015082359313965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014381408691406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015082359313965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014381408691406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010421276092529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015082359313965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014381408691406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010421276092529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015082359313965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014381408691406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010421276092529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012738704681396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016539096832275

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015082359313965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014381408691406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010421276092529

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012738704681396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042881965637207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061702728271484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046041011810303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037312507629395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065531730651855

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085902214050293

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085902214050293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037980079650879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058810710906982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004279613494873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058810710906982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045819282531738

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037720203399658

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037720203399658

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034430027008057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041413307189941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046360492706299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012388229370117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012388229370117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012388229370117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012388229370117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012388229370117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029458999633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057580471038818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012388229370117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011248588562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029458999633789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075628757476807

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001284122467041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001284122467041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044012069702148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262


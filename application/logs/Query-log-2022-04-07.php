select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099802017211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099802017211914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099802017211914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00037908554077148

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00022220611572266

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041604042053223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052118301391602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052118301391602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select * from office where  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0005040168762207

UPDATE `office` SET `company_name` = 'EMREMREMREMREMR', `license_no` = '', `company_mobile` = '1234567811', `company_phone` = '1234567891', `email_id` = '212121211@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'K1212anh1an1212gad Eye12 foundati12o12n &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = '1@gmail.com', `declaration` = 'Declarations', `gstin_no` = '', `mrd_code_no` = 'ABY', `youtube` = '', `website` = '', `facebook` = '', `printable_company_address` = 'P212rintable Com121Sabaka Ce12ntre, Kanhangad, Kasaragod - 67112315, Near New LIC Office', `nabh_logo` = 'nabhlogo.png', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0009610652923584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022828578948975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022828578948975

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022828578948975

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010068416595459

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='209' and  office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from patient_followup where  patient_registration_id = '209' and patient_followup_date='2022-04-07' and office_id= '1' 
 Execution Time:0.00076699256896973


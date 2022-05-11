select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017509460449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017509460449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017509460449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017509460449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021429061889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017509460449219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017809867858887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021069049835205

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001671314239502

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003605842590332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003605842590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084519386291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098013877868652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084519386291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042059421539307

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0015478134155273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0015478134155273

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095105171203613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095105171203613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047619342803955

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047619342803955

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001101016998291

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041007995605469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037388801574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028300285339355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051560401916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028829574584961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022678375244141

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029160976409912

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029160976409912

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020499229431152

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0030810832977295

select count(*) as cnt from investigation where  name = 'NCT' and office_id= '1' 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008091926574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008091926574707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033299922943115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015997886657715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033187866210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031960010528564

select count(*) as cnt from patient_registration where  patient_registration_id= '606' and  office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '606' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='606' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015108585357666

select count(*) as cnt from patient_registration where  patient_registration_id= '606' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='606' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015108585357666

select fname,lname,mrdno from patient_registration where  patient_registration_id='606' and  office_id= '1' 
 Execution Time:0.00018906593322754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075984001159668

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075984001159668

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019502639770508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022661685943604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025701522827148

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025701522827148

select fname,lname,mrdno from patient_registration where  patient_registration_id='1714' and  office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035851001739502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092601776123047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031189918518066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075387954711914

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075387954711914

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081515312194824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081515312194824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035529136657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027940273284912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027940273284912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027940273284912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027940273284912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010159015655518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027940273284912

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010159015655518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041985511779785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010139942169189

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0050010681152344

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0050010681152344

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0017969608306885

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079011917114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079011917114258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009160041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012411117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061488151550293

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061488151550293

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053286552429199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020029544830322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00069808959960938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036230087280273

select count(*) as cnt from patient_registration where  patient_registration_id= '408' and  office_id= '1' 
 Execution Time:0.00069808959960938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='408' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036230087280273

select fname,lname,mrdno from patient_registration where  patient_registration_id='408' and  office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00089216232299805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00089216232299805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097203254699707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049185752868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023019313812256

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056719779968262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056719779968262

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082302093505859

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082302093505859

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051617622375488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051617622375488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066399574279785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076603889465332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076603889465332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0052270889282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076603889465332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0052270889282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023958683013916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082778930664062

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076603889465332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0052270889282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023958683013916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038940906524658

select count(*) as cnt from patient_registration where  patient_registration_id= '727' and  office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from patient_registration where  patient_registration_id= '727' and  office_id= '1' 
 Execution Time:0.00036716461181641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='727' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015630722045898

select count(*) as cnt from patient_registration where  patient_registration_id= '727' and  office_id= '1' 
 Execution Time:0.00036716461181641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='727' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015630722045898

select fname,lname,mrdno from patient_registration where  patient_registration_id='727' and  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081110000610352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081110000610352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001990795135498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041790008544922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041790008544922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040280818939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019900798797607

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034298896789551

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034298896789551

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039360523223877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036277770996094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051159858703613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0051159858703613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036699771881104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021882057189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021882057189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032870769500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021882057189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032870769500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047972202301025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021882057189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032870769500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047972202301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021882057189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032870769500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047972202301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021882057189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032870769500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047972202301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030579566955566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021882057189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032870769500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0047972202301025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051770210266113

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037708282470703

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037708282470703

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0068747997283936

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070285797119141

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070285797119141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012259483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037391185760498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075271129608154

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075271129608154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075271129608154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075271129608154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075271129608154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_registration where  patient_registration_id= '1721' and  office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from patient_registration where  patient_registration_id= '1721' and  office_id= '1' 
 Execution Time:0.00041007995605469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1721' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017080307006836

select count(*) as cnt from patient_registration where  patient_registration_id= '1721' and  office_id= '1' 
 Execution Time:0.00041007995605469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1721' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017080307006836

select fname,lname,mrdno from patient_registration where  patient_registration_id='1721' and  office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093984603881836

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093984603881836

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00078988075256348

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0043768882751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082039833068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038149356842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038149356842041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038149356842041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038149356842041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029699802398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041918754577637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038149356842041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029699802398682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000701904296875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024211406707764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024211406707764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024211406707764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024211406707764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046889781951904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024211406707764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030651092529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042605400085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003046989440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028769969940186

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033590793609619

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0033590793609619

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037200450897217

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048718452453613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0048718452453613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040080547332764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009890079498291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009890079498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050468444824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009890079498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050468444824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065009593963623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009890079498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050468444824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065009593963623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009890079498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050468444824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065009593963623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.030838966369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009890079498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050468444824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065009593963623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.030838966369629

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0069239139556885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074169635772705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.009890079498291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050468444824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0065009593963623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.030838966369629

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0069239139556885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075819492340088

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088191032409668

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088191032409668

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023539066314697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023539066314697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041670799255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030100345611572

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-21' and  '2021-10-21' and  billing_master.office_id= 1        
 Execution Time:0.001594066619873

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-21' and  '2021-10-21' and  billing_master.office_id= 1        
 Execution Time:0.001594066619873

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-21' and '2021-10-21' and  patient_registration.office_id= 1      
 Execution Time:0.0035150051116943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045669078826904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058109760284424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058109760284424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058109760284424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058109760284424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-21' and  '2021-10-21' and  billing_master.office_id= 1        
 Execution Time:0.0059468746185303

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-21' and  '2021-10-21' and  billing_master.office_id= 1        
 Execution Time:0.0059468746185303

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-21' and '2021-10-21' and  patient_registration.office_id= 1      
 Execution Time:0.010437965393066

select count(*) as cnt from patient_registration where  patient_registration_id= '1108' and  office_id= '1' 
 Execution Time:0.0034058094024658

select count(*) as cnt from patient_registration where  patient_registration_id= '1108' and  office_id= '1' 
 Execution Time:0.0034058094024658

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1108' and  doctors_registration.office_id= '1' 
 Execution Time:0.019957065582275

select count(*) as cnt from patient_registration where  patient_registration_id= '1108' and  office_id= '1' 
 Execution Time:0.0034058094024658

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1108' and  doctors_registration.office_id= '1' 
 Execution Time:0.019957065582275

select fname,lname,mrdno from patient_registration where  patient_registration_id='1108' and  office_id= '1' 
 Execution Time:0.0041818618774414

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0094528198242188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0094528198242188

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0066790580749512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079360008239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079360008239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079360008239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079360008239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041251182556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079360008239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041251182556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079360008239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041251182556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004788875579834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041091442108154

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0079360008239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041251182556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004788875579834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084319114685059

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095605850219727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095605850219727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029661655426025

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024104118347168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003180980682373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083208084106445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018777847290039

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018777847290039

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013301372528076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023868083953857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026600360870361

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024330615997314

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024330615997314

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017871856689453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035829544067383

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035829544067383

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015900135040283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033259391784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033259391784668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033259391784668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033259391784668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029439926147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033259391784668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024831295013428

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010700225830078

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010700225830078

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035381317138672

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035381317138672

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087618827819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087618827819824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030238628387451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030238628387451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030238628387451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030238628387451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030238628387451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020198822021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030238628387451

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031709671020508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032579898834229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035181045532227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035181045532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035181045532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035181045532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035181045532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058579444885254

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0071308612823486

select count(*) as cnt from patient_registration where  patient_registration_id= '1727' and  office_id= '1' 
 Execution Time:0.00084590911865234

select count(*) as cnt from patient_registration where  patient_registration_id= '1727' and  office_id= '1' 
 Execution Time:0.00084590911865234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1727' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032200813293457

select count(*) as cnt from patient_registration where  patient_registration_id= '1727' and  office_id= '1' 
 Execution Time:0.00084590911865234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1727' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032200813293457

select fname,lname,mrdno from patient_registration where  patient_registration_id='1727' and  office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0045921802520752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0045921802520752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0010528564453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022461414337158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022461414337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022461414337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022461414337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022461414337158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035758018493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080204010009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041608810424805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016820430755615

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016820430755615

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077915191650391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040006637573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038449764251709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025296211242676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003359317779541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031712055206299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002453088760376

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050687789916992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050687789916992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050687789916992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050687789916992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026559829711914

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011239051818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005958080291748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005958080291748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023770332336426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073099136352539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073099136352539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017404556274414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089287757873535

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089287757873535

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010825157165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010825157165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010825157165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012180805206299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010825157165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012180805206299

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010825157165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012180805206299

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010825157165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012180805206299

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011608600616455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056297779083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010825157165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012180805206299

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042049884796143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011608600616455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013125896453857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075912475585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075912475585938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023939609527588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076985359191895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073504447937012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026781558990479

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038290023803711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002131462097168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0054471492767334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021109580993652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082993507385254

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082993507385254

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014040470123291

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0014040470123291

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010809898376465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010809898376465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037169456481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037169456481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068540573120117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037169456481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068540573120117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037169456481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068540573120117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039801597595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024650096893311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037169456481934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0068540573120117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039801597595215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057511329650879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027668476104736

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027668476104736

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028181076049805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028049945831299

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028049945831299

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0037901401519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027070045471191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027070045471191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027070045471191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027070045471191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004432201385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042781829833984

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018589496612549

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027070045471191

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004432201385498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074219703674316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066728591918945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066728591918945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010149478912354

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066728591918945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0048131942749023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051658153533936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051658153533936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051658153533936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025978088378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051658153533936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025978088378906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051658153533936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025978088378906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060107707977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051658153533936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025978088378906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060107707977295

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038208961486816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0051658153533936

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025978088378906

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060107707977295

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038208961486816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086610317230225

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018811225891113

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054502487182617

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020694732666016

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00066518783569336

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00066518783569336

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099515914916992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099515914916992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044488906860352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096011161804199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036571025848389

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062990188598633

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062990188598633

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015580654144287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015580654144287

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00037693977355957

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00017094612121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0053908824920654

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0053908824920654

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033879280090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095820426940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004011869430542

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025489330291748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098419189453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095820426940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00376296043396

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011460781097412

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011460781097412

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.01507306098938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0055420398712158

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0055420398712158

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049989223480225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038042068481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038042068481445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038042068481445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001270055770874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037670135498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038042068481445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001270055770874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012815952301025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040817260742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028731822967529

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089621543884277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089621543884277

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076198577880859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010709762573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010709762573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010709762573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012691020965576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010709762573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012691020965576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036041736602783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024678707122803

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024218559265137

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024218559265137

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032670497894287

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073909759521484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073909759521484

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028491020202637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004249095916748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004249095916748

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085649490356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085649490356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085649490356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036888122558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085649490356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036888122558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085649490356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036888122558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057070255279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085649490356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036888122558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057070255279541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022938251495361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0085649490356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036888122558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057070255279541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022938251495361

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059700012207031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053310394287109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053310394287109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015380382537842

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015380382537842

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031301975250244

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031301975250244

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034799575805664

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037198066711426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037198066711426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012619495391846

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012619495391846

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045740604400635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045740604400635

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042591094970703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045740604400635

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042591094970703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047321319580078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045740604400635

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042591094970703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047321319580078

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037119388580322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034871101379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031599998474121

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045740604400635

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042591094970703

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047321319580078

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037119388580322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038661956787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038661956787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035989284515381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038661956787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035989284515381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038661956787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035989284515381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011658668518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030548572540283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038661956787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035989284515381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011658668518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072388648986816

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.005728006362915

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.005728006362915

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038881301879883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033440589904785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033440589904785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015430450439453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079488754272461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079488754272461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079488754272461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079488754272461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059411525726318

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088310241699219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088310241699219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013937950134277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013937950134277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002993106842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036029815673828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025320053100586

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011260509490967

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011260509490967

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_registration where  patient_registration_id= '1002' and  office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_registration where  patient_registration_id= '1002' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1002' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024299621582031

select count(*) as cnt from patient_registration where  patient_registration_id= '1002' and  office_id= '1' 
 Execution Time:0.0004270076751709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1002' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024299621582031

select fname,lname,mrdno from patient_registration where  patient_registration_id='1002' and  office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036883354187012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023119449615479

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00063896179199219

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00022387504577637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028839111328125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028839111328125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022180080413818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030760765075684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030760765075684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030760765075684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030760765075684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00506591796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030760765075684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041489601135254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00506591796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010115146636963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023720264434814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023720264434814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023720264434814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014340877532959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023720264434814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014340877532959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023720264434814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014340877532959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00059914588928223

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00059914588928223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017831325531006

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00059914588928223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017831325531006

select fname,lname,mrdno from patient_registration where  patient_registration_id='1746' and  office_id= '1' 
 Execution Time:0.0002138614654541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018100738525391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018100738525391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050115585327148

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00080180168151855

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00056219100952148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036220550537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036220550537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036220550537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036220550537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036220550537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002018928527832


select * from office where  office_id= '1' 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023751258850098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023751258850098

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022330284118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023751258850098

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022330284118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018770694732666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023751258850098

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022330284118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018770694732666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023751258850098

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022330284118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018770694732666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023751258850098

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022330284118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018770694732666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032820701599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022270679473877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023751258850098

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022330284118652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018770694732666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032820701599121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058984756469727

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058984756469727

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00027918815612793

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00046014785766602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00057196617126465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00031518936157227

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00049281120300293

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00049281120300293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0005648136138916

select count(*) as cnt from patient_registration where  mobileno = '9000200470' and office_id= '1' 
 Execution Time:0.00049519538879395

select count(*) as cnt from patient_registration where  mobileno = '9000200489' and office_id= '1' 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0006558895111084

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084209442138672

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0006558895111084

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084209442138672

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00047993659973145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0001828670501709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024659633636475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024659633636475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024659633636475

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00034999847412109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='16' and  doctors_registration.office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00034999847412109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='16' and  doctors_registration.office_id= '1' 
 Execution Time:0.00044012069702148

select fname,lname,mrdno from patient_registration where  patient_registration_id='16' and  office_id= '1' 
 Execution Time:0.00018215179443359

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030949115753174

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030949115753174

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003960132598877

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0044078826904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-26' and '2021-08-26' and  billing_master.office_id= 1         
 Execution Time:0.0011909008026123

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-26' and '2021-08-26' and  billing_master.office_id= 1         
 Execution Time:0.0011909008026123

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00022196769714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-26' and '2021-08-26' and  patient_registration.office_id= 1      
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010509490966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010509490966797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010509490966797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011920928955078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010509490966797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011920928955078

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034418106079102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038259029388428

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010509490966797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011920928955078

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034418106079102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001262903213501

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.000579833984375

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.000579833984375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021688938140869

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.000579833984375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021688938140869

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00025486946105957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002593994140625

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002593994140625

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039982795715332

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029420852661133

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-26' and '2021-08-26' and  billing_master.office_id= 1       
 Execution Time:0.0011050701141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select * from office where  office_id= '1' 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012891292572021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001194953918457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066590309143066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012891292572021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027799606323242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00057196617126465

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.0001978874206543

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00046706199645996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058317184448242

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00046706199645996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058317184448242

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00015497207641602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066008567810059

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066008567810059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066008567810059

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024487972259521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00037002563476562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00037002563476562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00035715103149414

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00017809867858887

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00041890144348145

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034213066101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0012331008911133

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0012331008911133

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085997581481934

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0012331008911133

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085997581481934

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023317337036133

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00031304359436035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00031304359436035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00037384033203125

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026791095733643

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026791095733643

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053215026855469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373


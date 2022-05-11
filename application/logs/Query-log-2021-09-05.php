select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020208358764648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020208358764648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020208358764648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020208358764648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033931732177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022449493408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020208358764648

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019559860229492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033931732177734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066304206848145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_registration where  mobileno = '8921449125' and office_id= '1' 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090909004211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090909004211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090909004211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090909004211426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023198127746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00055980682373047

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00055980682373047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00055980682373047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049185752868652

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00020384788513184

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00043487548828125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035889148712158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035889148712158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035889148712158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00058698654174805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007021427154541

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00058698654174805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007021427154541

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025870800018311

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025870800018311

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002751350402832

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00047779083251953

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0027720928192139

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select count(*) as cnt from doctors_registration where  name = 'DR.SUPRABHA PRABHAKARAN' and office_id= '1' 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003662109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003662109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003662109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003662109375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060105323791504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060105323791504

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062298774719238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_registration where  mobileno = '8921449125' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from patient_registration where  mobileno = '8921449124' and office_id= '1' 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026798248291016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024819374084473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024819374084473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024819374084473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024819374084473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select count(*) as cnt from doctors_registration where  name = 'KURIAN JOSE' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from doctors_registration where  name = 'REMYA E' and office_id= '1' 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016269683837891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011839866638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091791152954102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016269683837891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-09-05' and '2021-09-05' and  patient_registration.office_id= 1      
 Execution Time:0.00067996978759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033378601074219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select * from office where  office_id= '1' 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041413307189941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select * from office where  office_id= '1' 
 Execution Time:0.00046181678771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037288665771484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select * from office where  office_id= '1' 
 Execution Time:0.0005800724029541

select * from office where  office_id= '1' 
 Execution Time:0.0006859302520752

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select * from office where  office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0005040168762207

UPDATE `office` SET `logo` = '', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00041794776916504

select * from office where  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00035500526428223

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '04672205197', `printable_company_mobile` = '8590920369', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'KEF', `printable_company_address` = 'Sabaka Centre, Near new LIC Office building\r\nPuthiyakotta,KANHANGAD-671315', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_title where  name = 'MR' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  name = 'MRS' and office_id= '1' 
 Execution Time:0.00045990943908691

select * from office where  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00060796737670898

UPDATE `office` SET `company_name` = 'KANHANGAD EYE FOUNDATION &amp; RESEARCH CENTRE', `license_no` = '', `company_mobile` = '8590920369', `company_phone` = '04672205197', `email_id` = 'Kanhangadeyefoundation@gmail.com', `address` = 'SABAKA CENTER,NEAR NEW LIC OFFICE BUILDING \r\nPUTHIYAKOTTA,KANHANGAD-671315', `printable_company_name` = 'KANHANGAD EYE FOUNDATION &amp; RESEARCH CENTRE', `printable_company_phone` = '04672205197', `printable_company_mobile` = '8590920369', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '32AATFK8530G1Z5', `mrd_code_no` = 'KEF', `printable_company_address` = 'Sabaka Centre, Near new LIC Office building\r\nPuthiyakotta,KANHANGAD-671315', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00065302848815918

select * from office where  office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_title where  name = 'BABY BOY' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_title where  name = 'BABY GIRL' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from patient_title where  name = 'MASTER' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from patient_title where  name = 'MISS' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from patient_category where  name = 'GENERAL' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from charge_type where  name = 'CONSULTATION' and office_id= '1' 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032520294189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032520294189453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032520294189453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032520294189453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032520294189453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from charge_type where  name = 'PROCEDURES' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from charge_type where  name = 'SURGERY' and office_id= '1' 
 Execution Time:0.0026187896728516

select count(*) as cnt from charge_type where  name = 'LASER' and office_id= '1' 
 Execution Time:0.00054383277893066

select count(*) as cnt from charge_type where  name = 'INJECTION' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from department where  name = 'CATARACT' and office_id= '1' 
 Execution Time:0.00042319297790527

select count(*) as cnt from department where  name = 'RETINA' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from department where  name = 'CORNEA' and office_id= '1' 
 Execution Time:0.00035500526428223

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select count(*) as cnt from department where  name = 'PROCEDURES' and office_id= '1' 
 Execution Time:0.00034189224243164

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  name = 'A SCANE + IOL MASTER' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from investigation where  name = 'AT' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from investigation where  name = 'BARRAGE LASER PER EYE' and office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from investigation where  name = 'CCT' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from investigation where  name = 'EYE PATCHING' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from investigation where  name = 'EYE WASH' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from investigation where  name = 'FB REMOVAL' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from investigation where  name = 'FOCAL/GRID' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from investigation where  name = 'GLAUCOMA SCREENING' and office_id= '1' 
 Execution Time:0.00025486946105957

select count(*) as cnt from investigation where  name = 'GONIO' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from investigation where  name = 'HFA' and office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from investigation where  name = 'I &amp; C' and office_id= '1' 
 Execution Time:0.00050520896911621

select count(*) as cnt from investigation where  name = 'OCT (BE)' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from investigation where  name = 'OCT PER EYE' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from investigation where  name = 'OCT,ONH/RNF' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from investigation where  name = 'PRP' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from investigation where  name = 'YAG CAP' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from investigation where  name = 'YAG PI' and office_id= '1' 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select count(*) as cnt from appointment_type where  name = 'NEW CONSULTATION' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from appointment_type where  name = 'FREE CONSULTATION' and office_id= '1' 
 Execution Time:0.00041007995605469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  name = 'CONSULTATION' and office_id= '1' 
 Execution Time:0.0004580020904541

select * from opdcharge where opdcharge_id='1' and office_id= '1' 
 Execution Time:0.00050616264343262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from opdcharge where  name = 'GENERAL CONSULTATION 1' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from opdcharge where  name = 'VISITING CONSULTATION' and office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from opdcharge where  name = 'FREE CONSULTATION' and office_id= '1' 
 Execution Time:0.00031805038452148

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select count(*) as cnt from doctors_registration where  name = 'Sudeep' and office_id= '1' 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select * from office where  office_id= '1' 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030183792114258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select * from office where  office_id= '1' 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036938190460205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0027689933776855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022759437561035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022759437561035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0010209083557129

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373


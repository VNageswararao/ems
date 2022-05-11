select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021440982818604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021440982818604

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036969184875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024089813232422

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020449161529541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018692016601562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021440982818604

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036969184875488

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025241374969482

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00048518180847168

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00048518180847168

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00017881393432617

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042414665222168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0001981258392334

select count(*) as cnt from patient_registration where  mobileno = '7026346140' and office_id= '1' 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021607875823975

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021607875823975

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021607875823975

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00037884712219238

select patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0004730224609375

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00021791458129883

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00029087066650391

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00042009353637695

select fname,lname,mrdno from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00021982192993164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026760101318359

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026760101318359

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092506408691406

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021200180053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021200180053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021200180053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021581649780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021200180053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021581649780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045590400695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029499530792236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021200180053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021581649780273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0045590400695801

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00043487548828125

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00045299530029297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from patient_registration where  mobileno = '1234567990' and office_id= '1' 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054287910461426

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042009353637695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00046086311340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028181076049805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002140998840332

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00029587745666504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00029587745666504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00029492378234863

select fname,lname,mrdno from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00014090538024902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023348331451416

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023348331451416

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00061917304992676

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00070691108703613

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044417381286621

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044417381286621

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002598762512207

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00055789947509766

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select * from office where  office_id= '1' 
 Execution Time:0.00036382675170898

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504


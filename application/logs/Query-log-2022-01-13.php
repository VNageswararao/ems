select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002032995223999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002032995223999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015430450439453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002032995223999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015430450439453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002032995223999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015430450439453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020809173583984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002032995223999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015430450439453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020809173583984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024309158325195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016980171203613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002032995223999

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015430450439453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020809173583984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018730163574219

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00076508522033691

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00025701522827148

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0007319450378418

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0007319450378418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005037784576416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058794021606445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031239986419678

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031239986419678

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027861595153809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031239986419678

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038471221923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027861595153809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 139 
 Execution Time:0.0010499954223633

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 175 
 Execution Time:0.00063514709472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072121620178223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072121620178223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072121620178223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 139 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 175 
 Execution Time:0.00039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867


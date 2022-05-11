select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020198822021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020198822021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020198822021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020198822021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019381046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030200481414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019748210906982

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020198822021484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00193190574646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019381046295166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042738914489746

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051116943359375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051116943359375

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044798851013184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070459842681885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027561187744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027561187744141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065009593963623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011780261993408

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027561187744141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002187967300415

select count(*) as cnt from patient_registration where  patient_registration_id= '2995' and  office_id= '1' 
 Execution Time:0.00044918060302734

select count(*) as cnt from patient_registration where  patient_registration_id= '2995' and  office_id= '1' 
 Execution Time:0.00044918060302734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2995' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028669834136963

select count(*) as cnt from patient_registration where  patient_registration_id= '2995' and  office_id= '1' 
 Execution Time:0.00044918060302734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2995' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028669834136963

select fname,lname,mrdno from patient_registration where  patient_registration_id='2995' and  office_id= '1' 
 Execution Time:0.0024480819702148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026280879974365

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026280879974365

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002741813659668

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033872127532959

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033872127532959

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035169124603271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035169124603271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035169124603271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035169124603271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035169124603271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011458396911621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011458396911621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045549869537354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065608024597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065608024597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065608024597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065608024597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065608024597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079202651977539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079202651977539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079202651977539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051522254943848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079202651977539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078659057617188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053348541259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053348541259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053348541259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053348541259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053348541259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from patient_registration where  patient_registration_id= '2896' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '2896' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2896' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026772022247314

select count(*) as cnt from patient_registration where  patient_registration_id= '2896' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2896' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026772022247314

select fname,lname,mrdno from patient_registration where  patient_registration_id='2896' and  office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011270046234131

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011270046234131

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063130855560303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063130855560303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063130855560303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063130855560303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063130855560303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013790130615234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003425121307373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033671855926514

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033671855926514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033671855926514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033671855926514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033671855926514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00031495094299316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.003803014755249

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00031495094299316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.003803014755249

select fname,lname,mrdno from patient_registration where  patient_registration_id='2771' and  office_id= '1' 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014591217041016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031805038452148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046429634094238

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00040316581726074

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00040316581726074

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026898384094238

select count(*) as cnt from patient_registration where  patient_registration_id= '2771' and  office_id= '1' 
 Execution Time:0.00040316581726074

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2771' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026898384094238

select fname,lname,mrdno from patient_registration where  patient_registration_id='2771' and  office_id= '1' 
 Execution Time:0.00023102760314941

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052309036254883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024890899658203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062720775604248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062720775604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062720775604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062720775604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062720775604248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051250457763672

select count(*) as cnt from patient_registration where  patient_registration_id= '2896' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_registration where  patient_registration_id= '2896' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2896' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025341510772705

select count(*) as cnt from patient_registration where  patient_registration_id= '2896' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2896' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025341510772705

select fname,lname,mrdno from patient_registration where  patient_registration_id='2896' and  office_id= '1' 
 Execution Time:0.0002291202545166

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085711479187012

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085711479187012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061893463134766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061893463134766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061893463134766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061893463134766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044417381286621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006166934967041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016117095947266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016117095947266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016117095947266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016117095947266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016117095947266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021815299987793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033769607543945

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.016927003860474

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.016927003860474

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064897537231445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.003093957901001

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037384033203125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073003768920898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019679069519043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019679069519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019679069519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034401416778564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012669563293457

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019679069519043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032451152801514

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034401416778564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060949325561523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040690898895264

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040690898895264

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019621849060059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054407119750977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054407119750977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054407119750977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054407119750977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036458969116211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_registration where  patient_registration_id= '2998' and  office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from patient_registration where  patient_registration_id= '2998' and  office_id= '1' 
 Execution Time:0.00046515464782715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2998' and  doctors_registration.office_id= '1' 
 Execution Time:0.005033016204834

select count(*) as cnt from patient_registration where  patient_registration_id= '2998' and  office_id= '1' 
 Execution Time:0.00046515464782715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2998' and  doctors_registration.office_id= '1' 
 Execution Time:0.005033016204834

select fname,lname,mrdno from patient_registration where  patient_registration_id='2998' and  office_id= '1' 
 Execution Time:0.0041089057922363

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030684471130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071811676025391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071811676025391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050210952758789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015687942504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015687942504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015687942504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015687942504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037841796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015687942504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037841796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037500858306885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015687942504883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031290054321289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037841796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037500858306885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089449882507324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015497207641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025081634521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051431655883789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011680126190186

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078392028808594

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078392028808594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068020820617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068020820617676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058670043945312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023818016052246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011992454528809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023818016052246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033338069915771

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026190280914307

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026190280914307

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012400150299072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043900012969971

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002601146697998

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020599365234375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074315071105957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074315071105957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065708160400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065708160400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065708160400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098204612731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065708160400391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098204612731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004633903503418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085151195526123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085151195526123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036070346832275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085151195526123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036070346832275

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035378932952881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085151195526123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036070346832275

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035378932952881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085151195526123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036070346832275

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035378932952881

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028419494628906

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037100315093994

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00047993659973145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052239894866943

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00047993659973145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052239894866943

select fname,lname,mrdno from patient_registration where  patient_registration_id='3003' and  office_id= '1' 
 Execution Time:0.0016140937805176

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099301338195801

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099301338195801

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051593780517578

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00078201293945312

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00063514709472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056989192962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023860931396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024986267089844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033907890319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033018589019775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033018589019775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017890930175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033018589019775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017890930175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033018589019775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017890930175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033018589019775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017890930175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033018589019775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017890930175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033018589019775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017890930175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010638236999512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044639110565186

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061392784118652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048112869262695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005781888961792

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032520294189453

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032520294189453

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.002997875213623

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039470195770264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048112869262695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048112869262695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048112869262695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048112869262695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003821849822998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090384483337402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050160884857178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059680938720703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024294853210449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022077560424805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040292739868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049810409545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012397766113281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012397766113281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012397766113281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012397766113281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012397766113281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015521049499512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00022006034851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034098625183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042319297790527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042319297790527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042319297790527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042319297790527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050251483917236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036101341247559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034618377685547

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034618377685547

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062999725341797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062999725341797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062999725341797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010030269622803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062999725341797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010030269622803

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035078525543213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062999725341797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010030269622803

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035078525543213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006464958190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062999725341797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010030269622803

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035078525543213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006464958190918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043139457702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062999725341797

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010030269622803

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035078525543213

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.006464958190918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043139457702637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014596939086914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069379806518555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069379806518555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039410591125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054869651794434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026290416717529

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026290416717529

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.002924919128418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035715103149414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058069229125977

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.00046491622924805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2365' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053081512451172

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.00046491622924805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2365' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053081512451172

select fname,lname,mrdno from patient_registration where  patient_registration_id='2365' and  office_id= '1' 
 Execution Time:0.0019350051879883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053501129150391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016481876373291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016481876373291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016481876373291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016481876373291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016481876373291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016481876373291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016481876373291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058293342590332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037109851837158

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.00083708763122559

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.00083708763122559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2365' and  doctors_registration.office_id= '1' 
 Execution Time:0.006882905960083

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.00083708763122559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2365' and  doctors_registration.office_id= '1' 
 Execution Time:0.006882905960083

select fname,lname,mrdno from patient_registration where  patient_registration_id='2365' and  office_id= '1' 
 Execution Time:0.0009760856628418

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020651817321777

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020651817321777

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010571479797363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010201930999756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086808204650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005650520324707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010201930999756

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055270195007324

select count(*) as cnt from patient_registration where  patient_registration_id= '1179' and  office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from patient_registration where  patient_registration_id= '1179' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1179' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036580562591553

select count(*) as cnt from patient_registration where  patient_registration_id= '1179' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1179' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036580562591553

select fname,lname,mrdno from patient_registration where  patient_registration_id='1179' and  office_id= '1' 
 Execution Time:0.00018405914306641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036478042602539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036478042602539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083398818969727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083398818969727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002241849899292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038695335388184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025599002838135

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002241849899292

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062839984893799

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010390281677246

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010390281677246

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070405006408691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053069591522217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001568078994751

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001568078994751

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036478042602539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001568078994751

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010488033294678

select count(*) as cnt from patient_registration where  patient_registration_id= '3007' and  office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_registration where  patient_registration_id= '3007' and  office_id= '1' 
 Execution Time:0.00029802322387695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3007' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027580261230469

select count(*) as cnt from patient_registration where  patient_registration_id= '3007' and  office_id= '1' 
 Execution Time:0.00029802322387695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3007' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027580261230469

select fname,lname,mrdno from patient_registration where  patient_registration_id='3007' and  office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011169910430908

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011169910430908

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098941326141357

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098941326141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089120864868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098941326141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089120864868164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098941326141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089120864868164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098941326141357

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089120864868164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020289421081543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041530132293701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024795532226562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043678283691406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035219192504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030112266540527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038189888000488

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074481964111328

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074481964111328

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067496299743652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067496299743652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083804130554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083804130554199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050578117370605

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029182434082031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065517425537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051131248474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034928321838379

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.0003960132598877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2776' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030150413513184

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.0003960132598877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2776' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030150413513184

select fname,lname,mrdno from patient_registration where  patient_registration_id='2776' and  office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048398971557617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060758590698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060758590698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060758590698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060758590698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060758590698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2776' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044147968292236

select count(*) as cnt from patient_registration where  patient_registration_id= '2776' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2776' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044147968292236

select fname,lname,mrdno from patient_registration where  patient_registration_id='2776' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091099739074707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091099739074707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038385391235352

select * from investigation where  investigation_id=18  and office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054769515991211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054769515991211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054769515991211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054769515991211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0016601085662842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054769515991211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0016601085662842

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023913383483887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034091472625732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058829784393311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003659725189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047440528869629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057919025421143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035028457641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035028457641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035028457641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035028457641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037539005279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046341419219971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035028457641602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037539005279541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089640617370605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087285041809082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051784515380859

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043301582336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041604042053223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032908916473389

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035786628723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054919719696045

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088381767272949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023388862609863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037503242492676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033798217773438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010602951049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010602951049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010602951049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010602951049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010602951049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010602951049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010602951049805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005781888961792

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087649822235107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087649822235107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087649822235107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012111663818359

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087649822235107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087649822235107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059530735015869

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057387351989746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005241870880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044488906860352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061681270599365

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021319389343262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021319389343262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031931400299072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057458877563477

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0057759284973145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0057759284973145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056247711181641

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0036380290985107

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0036380290985107

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0038518905639648

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045609474182129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045609474182129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052590370178223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064396858215332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032210350036621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036909580230713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036909580230713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038521289825439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028929710388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032250881195068

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036909580230713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038521289825439

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070130825042725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040450096130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040450096130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032079219818115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040450096130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032079219818115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034270286560059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040450096130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032079219818115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034270286560059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004021167755127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040450096130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032079219818115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034270286560059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004021167755127

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033838748931885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0081939697265625

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040450096130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032079219818115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034270286560059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004021167755127

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033838748931885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056807994842529

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061190128326416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061190128326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061190128326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061190128326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061190128326416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_registration where  patient_registration_id= '3014' and  office_id= '1' 
 Execution Time:0.0039260387420654

select count(*) as cnt from patient_registration where  patient_registration_id= '3014' and  office_id= '1' 
 Execution Time:0.0039260387420654

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3014' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078270435333252

select count(*) as cnt from patient_registration where  patient_registration_id= '3014' and  office_id= '1' 
 Execution Time:0.0039260387420654

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3014' and  doctors_registration.office_id= '1' 
 Execution Time:0.0078270435333252

select fname,lname,mrdno from patient_registration where  patient_registration_id='3014' and  office_id= '1' 
 Execution Time:0.0037407875061035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067141056060791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067141056060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067141056060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067141056060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067141056060791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074887275695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074887275695801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074887275695801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074887275695801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027730464935303

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016369819641113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016160011291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074887275695801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010058879852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069711208343506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057938098907471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057938098907471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038681030273438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057938098907471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038681030273438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057938098907471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038681030273438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039739608764648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003654956817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037329196929932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0057938098907471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038681030273438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039739608764648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063052177429199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from patient_registration where  patient_registration_id= '3010' and  office_id= '1' 
 Execution Time:0.00050520896911621

select count(*) as cnt from patient_registration where  patient_registration_id= '3010' and  office_id= '1' 
 Execution Time:0.00050520896911621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3010' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059289932250977

select count(*) as cnt from patient_registration where  patient_registration_id= '3010' and  office_id= '1' 
 Execution Time:0.00050520896911621

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3010' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059289932250977

select fname,lname,mrdno from patient_registration where  patient_registration_id='3010' and  office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011880397796631

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011880397796631

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061728954315186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061728954315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061728954315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061728954315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061728954315186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018596649169922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037097930908203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058910846710205

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052309036254883

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060105323791504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060105323791504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047590732574463

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034699440002441

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034699440002441

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038759708404541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005824089050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005824089050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005824089050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005824089050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005824089050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047016143798828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058059692382812

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002324104309082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002324104309082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026082992553711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003049373626709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048840045928955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024538040161133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024538040161133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032258033752441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023198127746582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015759468078613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003371000289917

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024538040161133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093293190002441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073940753936768

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00033712387084961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039942264556885

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00033712387084961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0039942264556885

select fname,lname,mrdno from patient_registration where  patient_registration_id='2543' and  office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084185600280762

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084185600280762

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046060085296631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046060085296631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046060085296631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046060085296631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046060085296631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select count(*) as cnt from patient_registration where  patient_registration_id= '3017' and  office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_registration where  patient_registration_id= '3017' and  office_id= '1' 
 Execution Time:0.0005190372467041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3017' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054330825805664

select count(*) as cnt from patient_registration where  patient_registration_id= '3017' and  office_id= '1' 
 Execution Time:0.0005190372467041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3017' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054330825805664

select fname,lname,mrdno from patient_registration where  patient_registration_id='3017' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095891952514648

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095891952514648

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00068497657775879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042099952697754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082278251647949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074195861816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036790370941162

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034120082855225

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034120082855225

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011470317840576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012269020080566

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011470317840576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056648254394531

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049805641174316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003882884979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046706199645996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051867961883545

select count(*) as cnt from patient_registration where  patient_registration_id= '609' and  office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_registration where  patient_registration_id= '609' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='609' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057811737060547

select count(*) as cnt from patient_registration where  patient_registration_id= '609' and  office_id= '1' 
 Execution Time:0.00039291381835938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='609' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057811737060547

select fname,lname,mrdno from patient_registration where  patient_registration_id='609' and  office_id= '1' 
 Execution Time:0.0022289752960205

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072002410888672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039219856262207

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006248950958252

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006248950958252

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.002528190612793

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091290473937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091290473937988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051119327545166

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049114227294922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074911117553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052950382232666

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048303604125977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035214424133301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080990791320801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007328987121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010421276092529

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073471069335938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073471069335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073471069335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027289390563965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073471069335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027289390563965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017178058624268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073471069335938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027289390563965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017178058624268

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058109760284424

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00067305564880371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00067305564880371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033712387084961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039308071136475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039308071136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039308071136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039308071136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039308071136475

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052618980407715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052618980407715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054299831390381

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029611587524414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053379535675049

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079822540283203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079822540283203

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038480758666992

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00029897689819336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025701522827148

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00029897689819336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025701522827148

select fname,lname,mrdno from patient_registration where  patient_registration_id='1911' and  office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008080005645752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022387504577637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070977210998535

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070977210998535

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from patient_registration where  patient_registration_id= '2556' and  office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from patient_registration where  patient_registration_id= '2556' and  office_id= '1' 
 Execution Time:0.0005030632019043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2556' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047900676727295

select count(*) as cnt from patient_registration where  patient_registration_id= '2556' and  office_id= '1' 
 Execution Time:0.0005030632019043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2556' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047900676727295

select fname,lname,mrdno from patient_registration where  patient_registration_id='2556' and  office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011351108551025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011351108551025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011351108551025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011351108551025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016520023345947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011351108551025

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016520023345947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057628154754639

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00046706199645996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057389736175537

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00046706199645996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057389736175537

select fname,lname,mrdno from patient_registration where  patient_registration_id='2204' and  office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048279762268066

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048279762268066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012550354003906

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072813034057617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072813034057617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027918815612793

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058317184448242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058317184448242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003446102142334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018715858459473

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090599060058594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090599060058594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069558620452881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069558620452881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069558620452881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040509700775146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069558620452881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040509700775146

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069558620452881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040509700775146

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069558620452881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040509700775146

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044989585876465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069558620452881

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040509700775146

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050020217895508

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011329650878906

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011329650878906

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004706859588623

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025486946105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039129257202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043051242828369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093050003051758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093050003051758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016598701477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093050003051758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016598701477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011019945144653

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093050003051758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016598701477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011019945144653

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093050003051758

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016598701477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011019945144653

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.011950969696045

select count(*) as cnt from patient_registration where  patient_registration_id= '3024' and  office_id= '1' 
 Execution Time:0.0025119781494141

select count(*) as cnt from patient_registration where  patient_registration_id= '3024' and  office_id= '1' 
 Execution Time:0.0025119781494141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3024' and  doctors_registration.office_id= '1' 
 Execution Time:0.0093579292297363

select count(*) as cnt from patient_registration where  patient_registration_id= '3024' and  office_id= '1' 
 Execution Time:0.0025119781494141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3024' and  doctors_registration.office_id= '1' 
 Execution Time:0.0093579292297363

select fname,lname,mrdno from patient_registration where  patient_registration_id='3024' and  office_id= '1' 
 Execution Time:0.0039920806884766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017053842544556

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017053842544556

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025749206542969

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00075292587280273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021641254425049

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086140632629395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001410961151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021641254425049

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0042409896850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021178722381592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037271976470947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039560794830322

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021178722381592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044639110565186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051712989807129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.01190710067749

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067806243896484

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00090718269348145

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00090718269348145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013439655303955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013439655303955

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013439655303955

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013439655303955

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012660026550293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013439655303955

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073180198669434

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061893463134766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022983551025391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012118816375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065493583679199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014541149139404

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012118816375732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068459510803223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048494338989258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010879039764404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010879039764404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010879039764404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010879039764404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012609958648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014081001281738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010879039764404

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012609958648682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085780620574951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057928562164307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057928562164307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057928562164307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057928562164307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057928562164307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012900829315186

select count(*) as cnt from patient_registration where  patient_registration_id= '3028' and  office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_registration where  patient_registration_id= '3028' and  office_id= '1' 
 Execution Time:0.00034403800964355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3028' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056431293487549

select count(*) as cnt from patient_registration where  patient_registration_id= '3028' and  office_id= '1' 
 Execution Time:0.00034403800964355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3028' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056431293487549

select fname,lname,mrdno from patient_registration where  patient_registration_id='3028' and  office_id= '1' 
 Execution Time:0.0020170211791992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011229515075684

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011229515075684

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0070269107818604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063779354095459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063779354095459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063779354095459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063779354095459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063779354095459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011098384857178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051379203796387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011098384857178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005997896194458

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069279670715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069279670715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069279670715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069279670715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069279670715332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select count(*) as cnt from patient_registration where  patient_registration_id= '3027' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '3027' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3027' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033419132232666

select count(*) as cnt from patient_registration where  patient_registration_id= '3027' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3027' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033419132232666

select fname,lname,mrdno from patient_registration where  patient_registration_id='3027' and  office_id= '1' 
 Execution Time:0.00090193748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058317184448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058317184448242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038888454437256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025582313537598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025582313537598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025582313537598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025582313537598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037391185760498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069742202758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069742202758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069742202758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069742202758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069742202758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_registration where  patient_registration_id= '3027' and  office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from patient_registration where  patient_registration_id= '3027' and  office_id= '1' 
 Execution Time:0.00031685829162598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3027' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027079582214355

select count(*) as cnt from patient_registration where  patient_registration_id= '3027' and  office_id= '1' 
 Execution Time:0.00031685829162598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3027' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027079582214355

select fname,lname,mrdno from patient_registration where  patient_registration_id='3027' and  office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078392028808594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078392028808594

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041508674621582

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058798789978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058798789978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058798789978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058798789978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058798789978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046751499176025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046751499176025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046751499176025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046751499176025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046751499176025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017061233520508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0046751499176025

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070810317993164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043079853057861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026788711547852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026788711547852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039370059967041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026788711547852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039370059967041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026788711547852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039370059967041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026788711547852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039370059967041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035898685455322

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026788711547852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039370059967041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005950927734375

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0005950927734375

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0080769062042236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077159404754639

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055911540985107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055911540985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055911540985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055911540985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055911540985107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078990459442139

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078990459442139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078990459442139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078990459442139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018069744110107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078990459442139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035059452056885

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023682117462158

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018069744110107

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054690837860107

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054690837860107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054690837860107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054690837860107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054690837860107

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025339126586914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037050247192383

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025339126586914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 64 
 Execution Time:0.00070500373840332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 90 
 Execution Time:0.0004279613494873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select * from examination where examination_id= '31' and   office_id= '1' 
 Execution Time:0.0010039806365967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 31 
 Execution Time:0.0030620098114014

select * from examination_chargesdetails where  examination_id= '31' 
 Execution Time:0.0026609897613525

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024850368499756

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024850368499756

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028109550476074

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00056219100952148

SELECT *
FROM `examination`
WHERE `examination_id` = 31 
 Execution Time:0.0011720657348633

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00059318542480469

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 64 
 Execution Time:0.00051522254943848

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0025429725646973

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=31 
 Execution Time:0.00046992301940918

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=31 
 Execution Time:0.00055980682373047

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=31 
 Execution Time:0.00035810470581055

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=31 
 Execution Time:0.00055098533630371

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='31' and office_id='1' 
 Execution Time:0.00088286399841309

select * from examination_chargesdetails where  examination_id= '31' 
 Execution Time:0.00062417984008789


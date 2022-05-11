select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021610260009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021610260009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024788379669189

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022330284118652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017738342285156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021610260009766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018007755279541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091719627380371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091719627380371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080394744873047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080394744873047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009620189666748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select count(*) as cnt from patient_registration where  patient_registration_id= '130' and  office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from patient_registration where  patient_registration_id= '130' and  office_id= '1' 
 Execution Time:0.00038695335388184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='130' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007169246673584

select count(*) as cnt from patient_registration where  patient_registration_id= '130' and  office_id= '1' 
 Execution Time:0.00038695335388184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='130' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007169246673584

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='130' and  office_id= '1' 
 Execution Time:0.00035715103149414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030500888824463

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035719871520996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0030500888824463

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 139 
 Execution Time:0.00052809715270996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 148 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025010108947754

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072193145751953

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072193145751953

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075507164001465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083184242248535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083184242248535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045299530029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083184242248535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059890747070312

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031721591949463

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057601928710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057601928710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057601928710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057601928710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057601928710938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072717666625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072717666625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070381164550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034284591674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072717666625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057101249694824

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057101249694824

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078320503234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078320503234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078320503234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059103965759277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089001655578613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 139 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 148 
 Execution Time:0.00034809112548828

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 139 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082683563232422

select * from examination where examination_id= '123' and   office_id= '1' 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 123 
 Execution Time:0.011255025863647

select * from examination_chargesdetails where  examination_id= '123' 
 Execution Time:0.002471923828125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029590129852295

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029590129852295

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0043079853057861

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00065183639526367

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00065183639526367

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00029420852661133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 140 
 Execution Time:0.0002138614654541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 149 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 140 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 149 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099802017211914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071287155151367

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071287155151367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 140 
 Execution Time:0.0005638599395752

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 149 
 Execution Time:0.00040102005004883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 140 
 Execution Time:0.001209020614624

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036158561706543

select * from examination where examination_id= '124' and   office_id= '1' 
 Execution Time:0.00098991394042969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041201114654541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 124 
 Execution Time:0.0011911392211914

select * from examination_chargesdetails where  examination_id= '124' 
 Execution Time:0.00070786476135254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010490417480469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010490417480469

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039887428283691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001201868057251

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00046896934509277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 63 
 Execution Time:0.0023999214172363

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 67 
 Execution Time:0.0003669261932373

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 63 
 Execution Time:0.0006871223449707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select * from examination where examination_id= '63' and   office_id= '1' 
 Execution Time:0.00084805488586426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 63 
 Execution Time:0.00024294853210449

select * from examination_chargesdetails where  examination_id= '63' 
 Execution Time:0.00019001960754395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078511238098145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078511238098145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 142 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 151 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 142 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 151 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 142 
 Execution Time:0.00036096572875977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 151 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003169059753418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010509490966797

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0075650215148926

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.0017948150634766

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 152 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015110969543457

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017259120941162

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 141 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 150 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00098896026611328

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00098896026611328

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 152 
 Execution Time:0.00033020973205566

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 143 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select * from examination where examination_id= '126' and   office_id= '1' 
 Execution Time:0.00092482566833496

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 126 
 Execution Time:0.00043201446533203

select * from examination_chargesdetails where  examination_id= '126' 
 Execution Time:0.00039100646972656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011000633239746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011000633239746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092196464538574

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011529922485352

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001168966293335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001168966293335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001168966293335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001168966293335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001168966293335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096988677978516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001168966293335

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084900856018066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006568431854248

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093412399291992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004317045211792

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004317045211792

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029890537261963

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 152 
 Execution Time:0.00022411346435547

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 143 
 Execution Time:0.00070500373840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select * from examination where examination_id= '126' and   office_id= '1' 
 Execution Time:0.0011060237884521

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 126 
 Execution Time:0.00047397613525391

select * from examination_chargesdetails where  examination_id= '126' 
 Execution Time:0.00044584274291992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.01105809211731

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.01105809211731

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049710273742676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 143 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 152 
 Execution Time:0.00042510032653809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 143 
 Execution Time:0.0014779567718506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select * from examination where examination_id= '126' and   office_id= '1' 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 126 
 Execution Time:0.00032901763916016

select * from examination_chargesdetails where  examination_id= '126' 
 Execution Time:0.00029706954956055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082206726074219

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0036129951477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 144 
 Execution Time:0.0002899169921875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 153 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 144 
 Execution Time:0.00048398971557617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 153 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011329650878906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 145 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 154 
 Execution Time:0.00073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 141 
 Execution Time:0.00050187110900879

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 150 
 Execution Time:0.0004880428314209

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 141 
 Execution Time:0.00089383125305176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098896026611328

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098896026611328

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select * from examination where examination_id= '127' and   office_id= '1' 
 Execution Time:0.00083708763122559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 127 
 Execution Time:0.0016031265258789

select * from examination_chargesdetails where  examination_id= '127' 
 Execution Time:0.00038814544677734

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001431941986084

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070095062255859

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043201446533203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 142 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 151 
 Execution Time:0.00040507316589355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 142 
 Execution Time:0.00073003768920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select * from examination where examination_id= '125' and   office_id= '1' 
 Execution Time:0.00077915191650391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 125 
 Execution Time:0.0003049373626709

select * from examination_chargesdetails where  examination_id= '125' 
 Execution Time:0.00036287307739258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056982040405273

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0035700798034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084209442138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084209442138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084209442138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084209442138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072789192199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084209442138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072789192199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 141 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 150 
 Execution Time:0.00041389465332031

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 141 
 Execution Time:0.00072813034057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060415267944336

select * from examination where examination_id= '127' and   office_id= '1' 
 Execution Time:0.0024011135101318

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022139549255371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 127 
 Execution Time:0.00078415870666504

select * from examination_chargesdetails where  examination_id= '127' 
 Execution Time:0.0024919509887695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082206726074219

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082206726074219

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046420097351074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.000701904296875

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032615661621094

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016889572143555

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006711483001709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006711483001709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093698501586914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093698501586914

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034079551696777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034079551696777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038142204284668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034079551696777

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039389133453369

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 155 
 Execution Time:0.00059103965759277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006861686706543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00046610832214355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 155 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00043892860412598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 155 
 Execution Time:0.00046014785766602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 144 
 Execution Time:0.00045013427734375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 153 
 Execution Time:0.00022315979003906

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 144 
 Execution Time:0.00084590911865234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select * from examination where examination_id= '128' and   office_id= '1' 
 Execution Time:0.001039981842041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 128 
 Execution Time:0.00061392784118652

select * from examination_chargesdetails where  examination_id= '128' 
 Execution Time:0.00067687034606934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066184997558594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082898139953613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 145 
 Execution Time:0.00035715103149414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 154 
 Execution Time:0.00028109550476074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 145 
 Execution Time:0.0009307861328125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select * from examination where examination_id= '129' and   office_id= '1' 
 Execution Time:0.00091004371643066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 129 
 Execution Time:0.0005030632019043

select * from examination_chargesdetails where  examination_id= '129' 
 Execution Time:0.0005040168762207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043511390686035

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 156 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043416023254395

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00082516670227051

SELECT *
FROM `examination`
WHERE `examination_id` = 129 
 Execution Time:0.00056886672973633

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00034213066101074

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 145 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00040817260742188

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=129 
 Execution Time:0.00047898292541504

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=129 
 Execution Time:0.00037693977355957

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=129 
 Execution Time:0.00052118301391602

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=129 
 Execution Time:0.00048995018005371

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='129' and office_id='1' 
 Execution Time:0.00037908554077148

select * from examination_chargesdetails where  examination_id= '129' 
 Execution Time:0.00015807151794434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080680847167969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 155 
 Execution Time:0.00023889541625977

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 146 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011587142944336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088691711425781

select * from examination where examination_id= '130' and   office_id= '1' 
 Execution Time:0.00086593627929688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 130 
 Execution Time:0.00053191184997559

select * from examination_chargesdetails where  examination_id= '130' 
 Execution Time:0.0005648136138916

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009300708770752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0009300708770752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050783157348633

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='56' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001629114151001

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='57' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097799301147461

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010378360748291

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 156 
 Execution Time:0.00015997886657715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 147 
 Execution Time:0.00076699256896973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056195259094238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056195259094238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select * from examination where examination_id= '131' and   office_id= '1' 
 Execution Time:0.00080704689025879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 131 
 Execution Time:0.00028896331787109

select * from examination_chargesdetails where  examination_id= '131' 
 Execution Time:0.0004730224609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0086641311645508

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='43' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016870498657227

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0033299922943115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012509822845459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012509822845459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010931491851807

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012471675872803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00095701217651367

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012509822845459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056290626525879

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023293495178223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00042295455932617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 157 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019180774688721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0022711753845215

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0022711753845215

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 157 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064182281494141

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064182281494141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089907646179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016651153564453

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016651153564453

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016651153564453

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00037622451782227

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 157 
 Execution Time:0.00028395652770996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 148 
 Execution Time:0.0016360282897949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.013101100921631

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.013101100921631

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038340091705322

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010881423950195

select * from examination where examination_id= '132' and   office_id= '1' 
 Execution Time:0.0040950775146484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033938884735107

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 132 
 Execution Time:0.012928009033203

select * from examination_chargesdetails where  examination_id= '132' 
 Execution Time:0.0078740119934082

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0042228698730469

SELECT *
FROM `examination`
WHERE `examination_id` = 132 
 Execution Time:0.0040709972381592

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0036661624908447

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0038340091705322

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.0038800239562988

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0028979778289795

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=132 
 Execution Time:0.0021519660949707

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=132 
 Execution Time:0.003687858581543

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=132 
 Execution Time:0.0028481483459473

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=132 
 Execution Time:0.00060486793518066

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='132' and office_id='1' 
 Execution Time:0.00069093704223633

select * from examination_chargesdetails where  examination_id= '132' 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 157 
 Execution Time:0.00027203559875488

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 148 
 Execution Time:0.00068092346191406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006868839263916

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006868839263916

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select * from examination where examination_id= '132' and   office_id= '1' 
 Execution Time:0.00095891952514648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087714195251465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 132 
 Execution Time:0.00080513954162598

select * from examination_chargesdetails where  examination_id= '132' 
 Execution Time:0.00041413307189941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 155 
 Execution Time:0.00031685829162598

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 146 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select * from examination where examination_id= '130' and   office_id= '1' 
 Execution Time:0.0012600421905518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 130 
 Execution Time:0.00047087669372559

select * from examination_chargesdetails where  examination_id= '130' 
 Execution Time:0.00027799606323242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077319145202637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077319145202637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046610832214355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054121017456055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095605850219727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00040006637573242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 156 
 Execution Time:0.00028395652770996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 147 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select * from examination where examination_id= '131' and   office_id= '1' 
 Execution Time:0.001209020614624

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 131 
 Execution Time:0.00065779685974121

select * from examination_chargesdetails where  examination_id= '131' 
 Execution Time:0.00030207633972168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017859935760498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00053000450134277

SELECT *
FROM `examination`
WHERE `examination_id` = 131 
 Execution Time:0.00079488754272461

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029706954956055

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00025606155395508

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00023889541625977

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=131 
 Execution Time:0.00060701370239258

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=131 
 Execution Time:0.00044488906860352

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=131 
 Execution Time:0.00035595893859863

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=131 
 Execution Time:0.00064897537231445

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='131' and office_id='1' 
 Execution Time:0.00055313110351562

select * from examination_chargesdetails where  examination_id= '131' 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017359256744385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017359256744385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095582008361816

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098395347595215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017359256744385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085616111755371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011069774627686

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00070905685424805

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016210079193115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037288665771484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076699256896973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016210079193115

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066909790039062

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.011456966400146

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.011456966400146

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.006601095199585

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083613395690918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083613395690918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018618106842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018618106842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018618106842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027580261230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018618106842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027580261230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010678768157959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067496299743652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018618106842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027580261230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019359588623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019359588623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019359588623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019359588623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013608932495117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019359588623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013608932495117

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019359588623047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013608932495117

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129


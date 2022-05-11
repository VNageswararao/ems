select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020837783813477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020837783813477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020837783813477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022249221801758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020837783813477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022249221801758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020201206207275

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017518997192383

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020837783813477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022249221801758

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017850399017334

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00091814994812012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00091814994812012

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046300888061523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012719631195068

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.00064492225646973

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.00064492225646973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='14' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010039806365967

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.00064492225646973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='14' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010039806365967

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='14' and  office_id= '1' 
 Execution Time:0.00023794174194336

select count(*) as cnt from patient_registration where  patient_registration_id= '62' and  office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '62' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='62' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from patient_registration where  patient_registration_id= '62' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='62' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048184394836426

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='62' and  office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023412704467773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003040075302124

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002932071685791

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 79 
 Execution Time:0.00043201446533203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 83 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0082840919494629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063991546630859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010449886322021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010449886322021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010449886322021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086307525634766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086307525634766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003819465637207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00015401840209961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080585479736328

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080585479736328

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045990943908691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select count(*) as cnt from patient_registration where  patient_registration_id= '57' and  office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_registration where  patient_registration_id= '57' and  office_id= '1' 
 Execution Time:0.00059795379638672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='57' and  doctors_registration.office_id= '1' 
 Execution Time:0.00065398216247559

select count(*) as cnt from patient_registration where  patient_registration_id= '57' and  office_id= '1' 
 Execution Time:0.00059795379638672

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='57' and  doctors_registration.office_id= '1' 
 Execution Time:0.00065398216247559

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='57' and  office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_registration where  patient_registration_id= '62' and  office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_registration where  patient_registration_id= '62' and  office_id= '1' 
 Execution Time:0.00038504600524902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='62' and  doctors_registration.office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_registration where  patient_registration_id= '62' and  office_id= '1' 
 Execution Time:0.00038504600524902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='62' and  doctors_registration.office_id= '1' 
 Execution Time:0.00055503845214844

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='62' and  office_id= '1' 
 Execution Time:0.0001978874206543

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00069785118103027

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00069785118103027

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066709518432617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066709518432617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077581405639648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077581405639648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029897689819336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077581405639648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010831356048584

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010831356048584

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017380714416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087499618530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087499618530273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003713846206665

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087499618530273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003713846206665

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00057005882263184

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041794776916504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0015418529510498

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0015418529510498

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027189254760742

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027189254760742

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084710121154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021696090698242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064420700073242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058603286743164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041985511779785

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00029182434082031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004122257232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053906440734863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043201446533203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006411075592041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006411075592041

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061583518981934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061583518981934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074315071105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074315071105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060296058654785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060296058654785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00015091896057129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069999694824219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069999694824219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019383430480957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019383430480957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019383430480957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019383430480957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037384033203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019383430480957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037384033203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035595893859863

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021910667419434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:9.8943710327148E-5

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:9.8943710327148E-5

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012302398681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:9.8943710327148E-5

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012302398681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:9.8943710327148E-5

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012302398681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010085105895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:9.8943710327148E-5

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012302398681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010085105895996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:9.8943710327148E-5

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012302398681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010085105895996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:9.8943710327148E-5

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012302398681641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010085105895996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042104721069336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043201446533203

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017881393432617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023219585418701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023219585418701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023219585418701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023219585418701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011501312255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023219585418701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011501312255859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044260025024414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0042557716369629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023219585418701

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011501312255859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023221969604492

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 68 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 72 
 Execution Time:0.00021600723266602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 68 
 Execution Time:0.0003972053527832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select * from examination where examination_id= '66' and   office_id= '1' 
 Execution Time:0.00095391273498535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 66 
 Execution Time:0.002655029296875

select * from examination_chargesdetails where  examination_id= '66' 
 Execution Time:0.0022480487823486

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0078299045562744

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0078299045562744

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055885314941406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055885314941406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033307075500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00092601776123047

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00092601776123047

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00042390823364258

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00029420852661133

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012187957763672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0013689994812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071191787719727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071191787719727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030021667480469

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042300224304199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042300224304199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087809562683105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081300735473633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00097417831420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_registration where  patient_registration_id= '90' and  office_id= '1' 
 Execution Time:0.0021939277648926

select count(*) as cnt from patient_registration where  patient_registration_id= '90' and  office_id= '1' 
 Execution Time:0.0021939277648926

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='90' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029721260070801

select count(*) as cnt from patient_registration where  patient_registration_id= '90' and  office_id= '1' 
 Execution Time:0.0021939277648926

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='90' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029721260070801

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='90' and  office_id= '1' 
 Execution Time:0.0010180473327637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060391426086426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060391426086426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049591064453125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002312183380127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002312183380127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002312183380127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019669532775879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 94 
 Execution Time:0.0017709732055664

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 99 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.00045990943908691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.000244140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 91 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 96 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 91 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 96 
 Execution Time:0.00018000602722168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 87 
 Execution Time:0.00041794776916504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 92 
 Execution Time:0.00018310546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 88 
 Execution Time:0.00045299530029297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 93 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073909759521484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 95 
 Execution Time:0.00033187866210938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 100 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054383277893066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 98 
 Execution Time:0.00049018859863281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 103 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 16 
 Execution Time:0.00044989585876465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 17 
 Execution Time:0.00028610229492188

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 16 
 Execution Time:0.00072693824768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045084953308105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013608932495117

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013608932495117

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select * from examination where examination_id= '8' and   office_id= '1' 
 Execution Time:0.0007789134979248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 8 
 Execution Time:0.0012340545654297

select * from examination_chargesdetails where  examination_id= '8' 
 Execution Time:0.0010390281677246

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 89 
 Execution Time:0.00023388862609863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 94 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014479160308838

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 82 
 Execution Time:0.00067400932312012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 87 
 Execution Time:0.001446008682251

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012079954147339

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012079954147339

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.012079954147339

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027379989624023

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00046896934509277

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 90 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select * from examination where examination_id= '77' and   office_id= '1' 
 Execution Time:0.0013010501861572

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012679100036621

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 77 
 Execution Time:0.0015530586242676

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.0013668537139893

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029759407043457

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029759407043457

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017237663269043

SELECT *
FROM `examination`
WHERE `examination_id` = 77 
 Execution Time:0.0081920623779297

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0038208961486816

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00048184394836426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.0033020973205566

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0014760494232178

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=77 
 Execution Time:0.0043070316314697

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=77 
 Execution Time:0.0009300708770752

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=77 
 Execution Time:0.00064206123352051

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=77 
 Execution Time:0.00080513954162598

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='77' and office_id='1' 
 Execution Time:0.0012779235839844

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.0026311874389648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016748905181885

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016748905181885

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016748905181885

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021259784698486

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.0020020008087158

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00063490867614746

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 90 
 Execution Time:0.0047171115875244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select * from examination where examination_id= '77' and   office_id= '1' 
 Execution Time:0.001270055770874

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 77 
 Execution Time:0.00044798851013184

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.0003349781036377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069189071655273

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069189071655273

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098180770874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098180770874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098180770874023

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00095796585083008

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 90 
 Execution Time:0.001183032989502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063180923461914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063180923461914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select * from examination where examination_id= '77' and   office_id= '1' 
 Execution Time:0.0009148120880127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 77 
 Execution Time:0.00037503242492676

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.00036978721618652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00038409233093262

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 90 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from examination where examination_id= '77' and   office_id= '1' 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 77 
 Execution Time:0.00044703483581543

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.00042295455932617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.00063705444335938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00075078010559082

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 90 
 Execution Time:0.0011780261993408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select * from examination where examination_id= '77' and   office_id= '1' 
 Execution Time:0.0011110305786133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 77 
 Execution Time:0.00070786476135254

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.0015060901641846

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089883804321289

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089883804321289

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046205520629883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0070888996124268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0070888996124268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011389255523682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0070888996124268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0050148963928223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0039980411529541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026178359985352

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-20' and  '2022-02-20' and  billing_master.office_id= 1        
 Execution Time:0.00084996223449707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-20' and  '2022-02-20' and  billing_master.office_id= 1        
 Execution Time:0.00084996223449707

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-20' and '2022-02-20' and  patient_registration.office_id= 1      
 Execution Time:0.0021460056304932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00075483322143555

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00075483322143555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045204162597656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028939247131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028939247131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036406517028809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028939247131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011641979217529

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011641979217529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011641979217529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011641979217529

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011119842529297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-20' and  '2022-02-20' and  billing_master.office_id= 1        
 Execution Time:0.0011398792266846

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-02-20' and  '2022-02-20' and  billing_master.office_id= 1        
 Execution Time:0.0011398792266846

select patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0 and appointment_date between  '2022-02-20' and '2022-02-20' and  patient_registration.office_id= 1      
 Execution Time:0.0022008419036865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088715553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

SELECT *
FROM `examination`
WHERE `examination_id` = 77 
 Execution Time:0.0053470134735107

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00090885162353516

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0013680458068848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.0005500316619873

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00054097175598145

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=77 
 Execution Time:0.002161979675293

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=77 
 Execution Time:0.0020530223846436

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=77 
 Execution Time:0.0021419525146484

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=77 
 Execution Time:0.0022530555725098

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='77' and office_id='1' 
 Execution Time:0.0019471645355225

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013878345489502

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013878345489502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013878345489502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00031805038452148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 90 
 Execution Time:0.00077486038208008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select * from examination where examination_id= '77' and   office_id= '1' 
 Execution Time:0.0010900497436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 77 
 Execution Time:0.0003199577331543

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.00026702880859375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013940334320068

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013940334320068

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013589859008789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 95 
 Execution Time:0.00049901008605957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 100 
 Execution Time:0.00079011917114258

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 95 
 Execution Time:0.001039981842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select * from examination where examination_id= '81' and   office_id= '1' 
 Execution Time:0.0007779598236084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 81 
 Execution Time:0.00057792663574219

select * from examination_chargesdetails where  examination_id= '81' 
 Execution Time:0.00039410591125488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071287155151367

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071287155151367

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043416023254395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00083303451538086

SELECT *
FROM `examination`
WHERE `examination_id` = 81 
 Execution Time:0.00046992301940918

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00041103363037109

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 95 
 Execution Time:0.00029110908508301

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00018596649169922

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=81 
 Execution Time:0.00036406517028809

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=81 
 Execution Time:0.00019001960754395

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=81 
 Execution Time:0.00017714500427246

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=81 
 Execution Time:0.00013113021850586

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='81' and office_id='1' 
 Execution Time:0.00041604042053223

select * from examination_chargesdetails where  examination_id= '81' 
 Execution Time:0.00010895729064941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 95 
 Execution Time:0.0007939338684082

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 100 
 Execution Time:0.0003819465637207

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 95 
 Execution Time:0.00099682807922363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select * from examination where examination_id= '81' and   office_id= '1' 
 Execution Time:0.0012049674987793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 81 
 Execution Time:0.00026392936706543

select * from examination_chargesdetails where  examination_id= '81' 
 Execution Time:0.00026893615722656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059008598327637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026988983154297


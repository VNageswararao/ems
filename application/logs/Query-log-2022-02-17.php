select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004040002822876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004040002822876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022571086883545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004040002822876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022571086883545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004040002822876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022571086883545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044620037078857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004040002822876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022571086883545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044620037078857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043389797210693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022609233856201

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028069019317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004040002822876

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022571086883545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044620037078857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00026893615722656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from patient_registration where  patient_registration_id= '24' and  office_id= '1' 
 Execution Time:0.00026893615722656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='24' and  doctors_registration.office_id= '1' 
 Execution Time:0.00042510032653809

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='24' and  office_id= '1' 
 Execution Time:0.00017499923706055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073909759521484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073909759521484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043821334838867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 24 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 51 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002385139465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011439323425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063610076904297

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00018119812011719

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075387954711914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075387954711914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071597099304199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043511390686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 24 
 Execution Time:0.00047707557678223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 51 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select * from examination where examination_id= '47' and   office_id= '1' 
 Execution Time:0.0010688304901123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 47 
 Execution Time:0.0034029483795166

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.0036070346832275

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016829967498779

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002335786819458

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002335786819458

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0046689510345459

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00086092948913574

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='42' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085091590881348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074481964111328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 24 
 Execution Time:0.00059008598327637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 51 
 Execution Time:0.00059390068054199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select * from examination where examination_id= '47' and   office_id= '1' 
 Execution Time:0.00057888031005859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 47 
 Execution Time:0.0002129077911377

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.0005030632019043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013341903686523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013341903686523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013341903686523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 50 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 52 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 50 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 52 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003662109375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070786476135254

select * from examination where examination_id= '48' and   office_id= '1' 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 48 
 Execution Time:0.00038719177246094

select * from examination_chargesdetails where  examination_id= '48' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055408477783203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025296211242676

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00064396858215332

SELECT *
FROM `examination`
WHERE `examination_id` = 47 
 Execution Time:0.00077009201049805

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00023388862609863

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 24 
 Execution Time:0.00026512145996094

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00030779838562012

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=47 
 Execution Time:0.00025796890258789

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=47 
 Execution Time:0.00020790100097656

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=47 
 Execution Time:0.00024294853210449

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=47 
 Execution Time:0.00030803680419922

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='47' and office_id='1' 
 Execution Time:0.00026512145996094

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.00018310546875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058293342590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003821849822998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003821849822998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003821849822998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003821849822998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019090175628662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003821849822998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019090175628662

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 51 
 Execution Time:0.0003211498260498

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 53 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 52 
 Execution Time:0.00043511390686035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 54 
 Execution Time:0.00068402290344238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040209293365479

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040209293365479

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040209293365479

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 52 
 Execution Time:0.0032269954681396

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 54 
 Execution Time:0.0038399696350098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038690567016602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089383125305176

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00067281723022461

SELECT *
FROM `examination`
WHERE `examination_id` = 47 
 Execution Time:0.00096893310546875

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00067710876464844

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00067901611328125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 24 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00065803527832031

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=47 
 Execution Time:0.00076007843017578

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=47 
 Execution Time:0.00067996978759766

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=47 
 Execution Time:0.00055503845214844

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=47 
 Execution Time:0.0040249824523926

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='47' and office_id='1' 
 Execution Time:0.00082707405090332

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.0034780502319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.0003349781036377

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.0003349781036377

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00045108795166016

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00023698806762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063309669494629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063309669494629

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0063309669494629

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 52 
 Execution Time:0.0003821849822998

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 54 
 Execution Time:0.00044393539428711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select * from examination where examination_id= '50' and   office_id= '1' 
 Execution Time:0.00078296661376953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052022933959961

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 50 
 Execution Time:0.00025010108947754

select * from examination_chargesdetails where  examination_id= '50' 
 Execution Time:0.00031399726867676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035381317138672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 52 
 Execution Time:0.00059604644775391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 54 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select * from examination where examination_id= '50' and   office_id= '1' 
 Execution Time:0.0011489391326904

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 50 
 Execution Time:0.00042390823364258

select * from examination_chargesdetails where  examination_id= '50' 
 Execution Time:0.00028300285339355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00090885162353516

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025320053100586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 50 
 Execution Time:0.00055098533630371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 52 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 50 
 Execution Time:0.00034785270690918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 52 
 Execution Time:0.00026798248291016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 50 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 52 
 Execution Time:0.00037384033203125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010640621185303

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010640621185303

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select * from examination where examination_id= '48' and   office_id= '1' 
 Execution Time:0.0011179447174072

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019710063934326

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 48 
 Execution Time:0.0010337829589844

select * from examination_chargesdetails where  examination_id= '48' 
 Execution Time:0.0030570030212402

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096893310546875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082921981811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082921981811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00082921981811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 51 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 53 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select * from examination where examination_id= '49' and   office_id= '1' 
 Execution Time:0.00080108642578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 49 
 Execution Time:0.00032711029052734

select * from examination_chargesdetails where  examination_id= '49' 
 Execution Time:0.00034093856811523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075984001159668

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0043518543243408

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0043518543243408

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032861232757568

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085806846618652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085806846618652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0087430477142334

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085997581481934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085997581481934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009150505065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041649341583252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026490688323975

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 50 
 Execution Time:0.0018551349639893

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 52 
 Execution Time:0.0038418769836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001500129699707

select * from examination where examination_id= '48' and   office_id= '1' 
 Execution Time:0.020328998565674

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 48 
 Execution Time:0.0054059028625488

select * from examination_chargesdetails where  examination_id= '48' 
 Execution Time:0.0059618949890137

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.041652202606201

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.041652202606201

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.015905857086182

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.005652904510498

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011799335479736

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0080070495605469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 51 
 Execution Time:0.00042510032653809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 53 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select * from examination where examination_id= '49' and   office_id= '1' 
 Execution Time:0.00370192527771

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003262996673584

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 49 
 Execution Time:0.0039348602294922

select * from examination_chargesdetails where  examination_id= '49' 
 Execution Time:0.0017690658569336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010409355163574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010409355163574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029871463775635

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047707557678223

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010969638824463

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00057506561279297

SELECT *
FROM `examination`
WHERE `examination_id` = 49 
 Execution Time:0.00072312355041504

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00023508071899414

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00054502487182617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 51 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00039100646972656

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=49 
 Execution Time:0.0012040138244629

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=49 
 Execution Time:0.00087380409240723

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=49 
 Execution Time:0.00062894821166992

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=49 
 Execution Time:0.00064587593078613

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='49' and office_id='1' 
 Execution Time:0.00076198577880859

select * from examination_chargesdetails where  examination_id= '49' 
 Execution Time:0.00040197372436523

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00038290023803711

SELECT *
FROM `examination`
WHERE `examination_id` = 49 
 Execution Time:0.00051617622375488

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00018596649169922

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00016093254089355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 51 
 Execution Time:0.0001680850982666

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00026392936706543

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=49 
 Execution Time:0.00045013427734375

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=49 
 Execution Time:0.00054693222045898

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=49 
 Execution Time:0.0003821849822998

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=49 
 Execution Time:0.00026702880859375

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='49' and office_id='1' 
 Execution Time:0.00034189224243164

select * from examination_chargesdetails where  examination_id= '49' 
 Execution Time:0.0019538402557373

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00054192543029785

SELECT *
FROM `examination`
WHERE `examination_id` = 49 
 Execution Time:0.00065803527832031

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00022506713867188

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0002892017364502

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 51 
 Execution Time:0.00023698806762695

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0018661022186279

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=49 
 Execution Time:0.0003349781036377

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=49 
 Execution Time:0.00027203559875488

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=49 
 Execution Time:0.00024008750915527

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=49 
 Execution Time:0.00046300888061523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='49' and office_id='1' 
 Execution Time:0.0004279613494873

select * from examination_chargesdetails where  examination_id= '49' 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.000701904296875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.00044918060302734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012099742889404

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00036215782165527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.0010428428649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011229515075684

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00033283233642578

SELECT *
FROM `examination`
WHERE `examination_id` = 50 
 Execution Time:0.00046586990356445

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00022292137145996

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00019192695617676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 52 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00017213821411133

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=50 
 Execution Time:0.00051712989807129

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=50 
 Execution Time:0.00039911270141602

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=50 
 Execution Time:0.0005190372467041

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=50 
 Execution Time:0.00047612190246582

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='50' and office_id='1' 
 Execution Time:0.00029110908508301

select * from examination_chargesdetails where  examination_id= '50' 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.0012068748474121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.00013399124145508

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.00012493133544922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097298622131348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097298622131348

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031876564025879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083112716674805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083112716674805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065016746520996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005791187286377

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.00092411041259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.00039076805114746

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.00027585029602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001072883605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001072883605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026848316192627

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001072883605957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026848316192627

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.0064470767974854

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.0002601146697998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.00058913230895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.00036311149597168

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.00028705596923828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00039386749267578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.00071287155151367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.00014996528625488

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.0001380443572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065016746520996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035214424133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072884559631348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 24 
 Execution Time:0.0022311210632324

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 51 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select * from examination where examination_id= '47' and   office_id= '1' 
 Execution Time:0.0010659694671631

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 47 
 Execution Time:0.00029897689819336

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022711753845215

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022711753845215

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071215629577637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031304359436035

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.0045011043548584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010430812835693

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.0004270076751709

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.00034189224243164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00024080276489258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.00032496452331543

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.00026106834411621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079488754272461

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079488754272461

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00034117698669434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.00061607360839844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.00020599365234375

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.0001838207244873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062417984008789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062417984008789

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046491622924805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050783157348633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 53 
 Execution Time:0.00031113624572754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 55 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053811073303223

select * from examination where examination_id= '51' and   office_id= '1' 
 Execution Time:0.00091195106506348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 51 
 Execution Time:0.0012099742889404

select * from examination_chargesdetails where  examination_id= '51' 
 Execution Time:0.0005791187286377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018069744110107

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018069744110107

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073599815368652

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00096702575683594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00044798851013184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051593780517578

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00018405914306641

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00048089027404785

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00048089027404785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091218948364258

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00048089027404785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091218948364258

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.0002288818359375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086879730224609

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086879730224609

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00066900253295898

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00066900253295898

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026583671569824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021886825561523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089716911315918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.0007169246673584

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 57 
 Execution Time:0.00054311752319336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00093603134155273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 57 
 Execution Time:0.0026750564575195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003964900970459

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017390251159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00038981437683105

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 57 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.0043380260467529

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016899108886719

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.003403902053833

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00090599060058594

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029540061950684

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010440349578857

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010440349578857

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 57 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.0011749267578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00023913383483887

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040698051452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 57 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.00087404251098633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.00019288063049316

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00046205520629883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 57 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.0016109943389893

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.00020003318786621

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.0001678466796875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015640258789062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00028419494628906

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 56 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011110305786133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057196617126465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011110305786133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089693069458008

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089693069458008

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096583366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004863977432251

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004863977432251

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004863977432251

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004863977432251

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038511753082275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004863977432251

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038511753082275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039248466491699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004863977432251

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038759708404541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038511753082275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038638114929199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019168853759766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019168853759766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022420883178711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019168853759766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 55 
 Execution Time:0.0008540153503418

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 59 
 Execution Time:0.00081491470336914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0088150501251221

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 55 
 Execution Time:0.00072693824768066

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 59 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014290809631348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00094985961914062

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032310485839844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00053191184997559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025331974029541

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077009201049805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077009201049805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046920776367188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046920776367188

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032877922058105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032210350036621

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045609474182129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045609474182129

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00089907646179199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018348693847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018348693847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018348693847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018348693847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028250217437744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018348693847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028250217437744

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018348693847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028250217437744

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070905685424805

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085997581481934

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085997581481934

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082612037658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037407875061035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041358470916748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041358470916748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020079612731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040721893310547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041358470916748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020079612731934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00166916847229

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00166916847229

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 55 
 Execution Time:0.011308908462524

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 59 
 Execution Time:0.0023748874664307

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select * from examination where examination_id= '53' and   office_id= '1' 
 Execution Time:0.010546922683716

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013670921325684

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 53 
 Execution Time:0.0033988952636719

select * from examination_chargesdetails where  examination_id= '53' 
 Execution Time:0.0019891262054443

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067591667175293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.021037817001343

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.021037817001343

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.055233001708984

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0027298927307129

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0035958290100098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036907196044922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00074601173400879

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00019979476928711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089502334594727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089502334594727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049519538879395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049519538879395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049519538879395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049519538879395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049519538879395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060892105102539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025415420532227

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00056791305541992

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00056791305541992

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00028109550476074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010719299316406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010719299316406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073599815368652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010662078857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073599815368652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010662078857422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024769306182861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073599815368652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010662078857422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024769306182861

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043461322784424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073599815368652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010662078857422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024769306182861

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043461322784424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00082683563232422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073599815368652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010662078857422

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024769306182861

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043461322784424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038459300994873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014529228210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014529228210449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011000633239746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014529228210449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 59 
 Execution Time:0.00062012672424316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 63 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033950805664062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 57 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 61 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0056760311126709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00046205520629883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 64 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.0002138614654541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 64 
 Execution Time:0.00015020370483398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031299591064453

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031299591064453

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031299591064453

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037660598754883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 56 
 Execution Time:0.0024721622467041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 60 
 Execution Time:0.003572940826416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023360252380371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034329891204834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013649463653564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013649463653564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0008091926574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013649463653564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057888031005859

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057888031005859

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026297569274902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011107921600342

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011107921600342

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011107921600342

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 58 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 62 
 Execution Time:0.00020503997802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077986717224121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077986717224121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 56 
 Execution Time:0.00021910667419434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 60 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00097084045410156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.0011460781097412

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00077486038208008

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011649131774902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011649131774902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 56 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 60 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076889991760254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00076889991760254

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00088191032409668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00033712387084961

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00029182434082031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018949508666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 56 
 Execution Time:0.00033712387084961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 60 
 Execution Time:0.00028681755065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 56 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 60 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096607208251953

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00076985359191895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.0002589225769043

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00026798248291016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073885917663574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073885917663574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052380561828613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00069713592529297

SELECT *
FROM `examination`
WHERE `examination_id` = 54 
 Execution Time:0.0011279582977295

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0003201961517334

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00040197372436523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00050497055053711

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00041103363037109

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=54 
 Execution Time:0.00064802169799805

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=54 
 Execution Time:0.00046896934509277

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=54 
 Execution Time:0.00046610832214355

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=54 
 Execution Time:0.00043106079101562

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='54' and office_id='1' 
 Execution Time:0.00047087669372559

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00025415420532227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00061798095703125

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00022482872009277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062799453735352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062799453735352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00016307830810547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070476531982422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070476531982422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070476531982422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0025670528411865

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0025670528411865

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00051999092102051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065112113952637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065112113952637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00079607963562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00014615058898926

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00012612342834473

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00022792816162109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00015902519226074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0011179447174072

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00038003921508789

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00031018257141113

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 62 
 Execution Time:0.00039386749267578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 66 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 62 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 66 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033879280090332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00039100646972656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00068402290344238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0001370906829834

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00011110305786133

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075387954711914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028705596923828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00027990341186523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 65 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0004880428314209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00092697143554688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00080013275146484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00027704238891602

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00032806396484375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066614151000977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066614151000977

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00033283233642578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00023412704467773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0022327899932861

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00028586387634277

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00029397010803223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00039505958557129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0037460327148438

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003849983215332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00095319747924805

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0020210742950439

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042390823364258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.002161979675293

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0011160373687744

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00022315979003906

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00020313262939453

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010240077972412

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010240077972412

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043320655822754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00045514106750488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00025677680969238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00096797943115234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0002598762512207

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00017690658569336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003359317779541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00083112716674805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00048518180847168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0012550354003906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00029611587524414

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00058913230895996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0049858093261719

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0049858093261719

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067591667175293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00033116340637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00065207481384277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0003211498260498

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00026702880859375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043082237243652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00048303604125977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00053000450134277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099611282348633

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0015509128570557

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00068211555480957

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00059795379638672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001140832901001

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001140832901001

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011019706726074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011019706726074

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044417381286621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007331371307373

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00074195861816406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0002439022064209

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00017595291137695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00055909156799316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00012898445129395

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00010204315185547

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051522254943848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051522254943848

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010268688201904

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0010950565338135

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00044608116149902

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00036883354187012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057220458984375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008690357208252

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00064301490783691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042605400085449

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00037312507629395

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00040507316589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00077986717224121

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 56 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00065803527832031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 56 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00026679039001465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 56 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015161037445068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015161037445068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00092411041259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015161037445068

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00094008445739746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00035595893859863

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00029087066650391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009300708770752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00021004676818848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028300285339355

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00091004371643066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00055813789367676

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00030803680419922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042819976806641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010249614715576

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00092196464538574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00026702880859375

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00031208992004395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084900856018066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084900856018066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039982795715332

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00072312355041504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00019502639770508

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00016093254089355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.014985799789429

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.014985799789429

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.014985799789429

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00034689903259277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00095200538635254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00030183792114258

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00024700164794922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060009956359863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060009956359863

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052714347839355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046181678771973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00024509429931641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0010862350463867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00026082992553711

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00046586990356445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081610679626465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00098705291748047

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00037789344787598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0015299320220947

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00054407119750977

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00026702880859375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084900856018066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084900856018066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031185150146484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00039386749267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00087189674377441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0002140998840332

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00023007392883301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00021791458129883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00096702575683594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00060892105102539

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00029301643371582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045680999755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019621849060059

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019621849060059

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036189556121826

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019621849060059

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033559799194336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0031158924102783

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0028450489044189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032129287719727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053119659423828

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0012078285217285

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00024509429931641

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00037288665771484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00047397613525391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00064992904663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00013899803161621

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00015902519226074

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038385391235352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00021815299987793

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00013995170593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00092720985412598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00032997131347656

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00025081634521484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032591819763184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00083303451538086

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0001671314239502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019478797912598

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.001270055770874

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0002748966217041

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00020909309387207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061583518981934

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061583518981934

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071883201599121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00015091896057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00058507919311523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0032570362091064

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0035741329193115

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087285041809082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087285041809082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074219703674316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00066304206848145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0011529922485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00027298927307129

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00042414665222168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073790550231934

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073790550231934

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00096297264099121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0004570484161377

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00022411346435547

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004432201385498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004432201385498

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039949417114258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039949417114258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00075197219848633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00023722648620605

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00025200843811035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047111511230469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0013301372528076

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00032210350036621

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00033998489379883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034284591674805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034284591674805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00044083595275879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0011448860168457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00049805641174316

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00043892860412598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005030632019043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005030632019043

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00023913383483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00076913833618164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00022411346435547

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00021195411682129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003352165222168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014588832855225

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00023508071899414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00084686279296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00015687942504883

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00014519691467285

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031495094299316

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025105476379395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00021910667419434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00034999847412109

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00021195411682129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080990791320801

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080990791320801

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00020909309387207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00063610076904297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00012898445129395

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:9.9897384643555E-5

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00023984909057617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00014996528625488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00075888633728027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00018405914306641

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0001530647277832

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003201961517334

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065016746520996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065016746520996

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 59 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 63 
 Execution Time:0.00026178359985352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select * from examination where examination_id= '55' and   office_id= '1' 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 55 
 Execution Time:0.00037598609924316

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00023698806762695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054621696472168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054621696472168

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006709098815918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 57 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 61 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select * from examination where examination_id= '56' and   office_id= '1' 
 Execution Time:0.00059318542480469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 56 
 Execution Time:0.00039315223693848

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.00042510032653809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028014183044434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00020408630371094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 65 
 Execution Time:0.00015592575073242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select * from examination where examination_id= '61' and   office_id= '1' 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 61 
 Execution Time:0.00012397766113281

select * from examination_chargesdetails where  examination_id= '61' 
 Execution Time:0.00010490417480469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028085708618164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00020122528076172

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0007469654083252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00016593933105469

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00012993812561035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069785118103027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069785118103027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00034213066101074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00064611434936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00021886825561523

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00025486946105957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068497657775879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068497657775879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00023293495178223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00084805488586426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0002291202545166

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00012803077697754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032782554626465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039815902709961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041484832763672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040078163146973

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00013518333435059

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00019001960754395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0005650520324707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00038909912109375

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00084304809570312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00093197822570801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00054097175598145

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0006568431854248

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044822692871094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074100494384766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00032281875610352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0002739429473877

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00042891502380371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00091385841369629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00029397010803223

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00032496452331543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061678886413574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061678886413574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 179 
 Execution Time:0.00062894821166992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 226 
 Execution Time:0.00048089027404785

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 179 
 Execution Time:0.00076198577880859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select * from examination where examination_id= '81' and   office_id= '1' 
 Execution Time:0.00064611434936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 81 
 Execution Time:0.00055217742919922

select * from examination_chargesdetails where  examination_id= '81' 
 Execution Time:0.00040888786315918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034713745117188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061607360839844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045680999755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045680999755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079083442687988

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00046610832214355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079083442687988

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027918815612793

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027918815612793

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00022602081298828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0002140998840332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 228 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042486190795898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00060606002807617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 228 
 Execution Time:0.00031399726867676

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.0043489933013916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select * from examination where examination_id= '83' and   office_id= '1' 
 Execution Time:0.0019850730895996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 83 
 Execution Time:0.0008089542388916

select * from examination_chargesdetails where  examination_id= '83' 
 Execution Time:0.00049304962158203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052309036254883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052309036254883

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048184394836426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073385238647461

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073385238647461

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027680397033691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 228 
 Execution Time:0.00025391578674316

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.00057387351989746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select * from examination where examination_id= '83' and   office_id= '1' 
 Execution Time:0.0012340545654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 83 
 Execution Time:0.00042009353637695

select * from examination_chargesdetails where  examination_id= '83' 
 Execution Time:0.00026512145996094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033211708068848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00022721290588379

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 228 
 Execution Time:0.00017499923706055

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select * from examination where examination_id= '83' and   office_id= '1' 
 Execution Time:0.00055813789367676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 83 
 Execution Time:0.00026488304138184

select * from examination_chargesdetails where  examination_id= '83' 
 Execution Time:0.00014805793762207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038385391235352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029611587524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00022792816162109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0001828670501709

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00089311599731445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00039410591125488

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00025391578674316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038385391235352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00064301490783691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00047516822814941

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00089502334594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0015599727630615

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00035500526428223

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00046300888061523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00026917457580566

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00014495849609375

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00069594383239746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00030899047851562

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00034904479980469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046682357788086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040698051452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0002601146697998

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00017404556274414

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064516067504883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064516067504883

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072979927062988

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00080990791320801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0001671314239502

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00014781951904297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00025582313537598

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00059008598327637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00045394897460938

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0003969669342041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081896781921387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00037288665771484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00029611587524414

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0013790130615234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00042510032653809

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00043201446533203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033783912658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035250186920166

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00082182884216309

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00059604644775391

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.0014510154724121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00097894668579102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00044512748718262

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00050902366638184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094199180603027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00094199180603027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052618980407715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009911060333252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00066089630126953

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00047087669372559

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00064587593078613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0011429786682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085878372192383

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00061893463134766

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00026798248291016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071907043457031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071907043457031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071597099304199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00031614303588867

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028204917907715

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00056695938110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00017404556274414

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00039100646972656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070619583129883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070619583129883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070619583129883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00028896331787109

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00064992904663086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0010619163513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00040006637573242

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00043702125549316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006861686706543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006861686706543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045919418334961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00051712989807129

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.000762939453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0012221336364746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00047588348388672

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00034689903259277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000640869140625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000640869140625

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00065207481384277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00045394897460938

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0012669563293457

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00023603439331055

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00090718269348145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059604644775391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0025608539581299

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.0011870861053467

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.0023319721221924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049090385437012

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00078606605529785

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00026893615722656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 64 
 Execution Time:0.00023889541625977

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 60 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select * from examination where examination_id= '57' and   office_id= '1' 
 Execution Time:0.00077104568481445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 57 
 Execution Time:0.00022196769714355

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.0001680850982666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034713745117188

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034713745117188

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 56 
 Execution Time:0.00028491020202637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 60 
 Execution Time:0.00023198127746582

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 56 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034713745117188

select * from examination where examination_id= '58' and   office_id= '1' 
 Execution Time:0.00088405609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 58 
 Execution Time:0.00025391578674316

select * from examination_chargesdetails where  examination_id= '58' 
 Execution Time:0.00025010108947754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00050592422485352

SELECT *
FROM `examination`
WHERE `examination_id` = 47 
 Execution Time:0.00057697296142578

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00020289421081543

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00053596496582031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 24 
 Execution Time:0.00018811225891113

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00039505958557129

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=47 
 Execution Time:0.00032210350036621

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=47 
 Execution Time:0.00019407272338867

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=47 
 Execution Time:0.00018310546875

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=47 
 Execution Time:0.00049996376037598

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='47' and office_id='1' 
 Execution Time:0.0006411075592041

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.00022292137145996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00030183792114258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00020813941955566

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 47 
 Execution Time:0.00087285041809082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00060892105102539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0002598762512207

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0001838207244873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076889991760254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013959407806396

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013959407806396

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0010769367218018

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00022983551025391

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00095105171203613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00041294097900391

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00046396255493164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select * from office where  office_id= '1' 
 Execution Time:0.00074887275695801

select * from office where  office_id= '1' 
 Execution Time:0.0009150505065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00040698051452637

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00054693222045898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00055813789367676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00018692016601562

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00018882751464844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024890899658203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select * from office where  office_id= '1' 
 Execution Time:0.00045990943908691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00021886825561523

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00069999694824219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00072002410888672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00020909309387207

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0002129077911377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039982795715332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00053906440734863

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00063586235046387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011639595031738

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00076389312744141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00021100044250488

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00018310546875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from office where  office_id= '1' 
 Execution Time:0.00056910514831543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00028014183044434

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0006711483001709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00044798851013184

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00027203559875488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00037717819213867

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039887428283691

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.002777099609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00012803077697754

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.0001070499420166

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036811828613281

select * from office where  office_id= '1' 
 Execution Time:0.00095486640930176

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00092697143554688

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00060391426086426

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.0012481212615967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.0011701583862305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.0028629302978516

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00084090232849121

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096487998962402

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096487998962402

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063490867614746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0097451210021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076079368591309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 62 
 Execution Time:0.00051307678222656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 66 
 Execution Time:0.00051116943359375

select  DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 62 
 Execution Time:0.00087499618530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select * from examination where examination_id= '60' and   office_id= '1' 
 Execution Time:0.0011401176452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 60 
 Execution Time:0.00031709671020508

select * from examination_chargesdetails where  examination_id= '60' 
 Execution Time:0.00059413909912109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091910362243652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091910362243652

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00023007392883301

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 56 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047612190246582

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00035405158996582

SELECT *
FROM `examination`
WHERE `examination_id` = 52 
 Execution Time:0.00057792663574219

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00023698806762695

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00016903877258301

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.00040102005004883

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=52 
 Execution Time:0.00029683113098145

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=52 
 Execution Time:0.00017714500427246

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=52 
 Execution Time:0.00015902519226074

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=52 
 Execution Time:0.00067305564880371

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='52' and office_id='1' 
 Execution Time:0.00025105476379395

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00018310546875

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00059390068054199

SELECT *
FROM `examination`
WHERE `examination_id` = 16 
 Execution Time:0.00051999092102051

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00019598007202148

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 17 
 Execution Time:0.00017809867858887

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.0002598762512207

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=16 
 Execution Time:0.00029993057250977

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=16 
 Execution Time:0.00020503997802734

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=16 
 Execution Time:0.00016307830810547

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=16 
 Execution Time:0.00021696090698242

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='16' and office_id='1' 
 Execution Time:0.00026798248291016

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00022196769714355


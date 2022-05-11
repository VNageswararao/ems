select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018999576568604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018999576568604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002439022064209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020880699157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018851757049561

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017199516296387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017690658569336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018999576568604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.00070595741271973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='157' and  doctors_registration.office_id= '1' 
 Execution Time:0.00077104568481445

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.00070595741271973

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='157' and  doctors_registration.office_id= '1' 
 Execution Time:0.00077104568481445

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='157' and  office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from source where  name = 'Camp Referral' and office_id= '1' 
 Execution Time:0.0012860298156738

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0026350021362305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009620189666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009620189666748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009620189666748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009620189666748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009620189666748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009620189666748

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042581558227539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042581558227539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042581558227539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042581558227539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042581558227539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088787078857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088787078857422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048398971557617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088787078857422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045514106750488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045514106750488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0001828670501709

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0009300708770752

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0009300708770752

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064516067504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064516067504883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064516067504883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024569034576416

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.00031018257141113

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 255 
 Execution Time:0.00015997886657715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.00021100044250488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 255 
 Execution Time:0.00014591217041016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.00029516220092773

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 255 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024759769439697

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 255 
 Execution Time:0.00031089782714844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 238 
 Execution Time:0.0018420219421387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select * from examination where examination_id= '217' and   office_id= '1' 
 Execution Time:0.000885009765625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 217 
 Execution Time:0.0020439624786377

select * from examination_chargesdetails where  examination_id= '217' 
 Execution Time:0.0021140575408936

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015280246734619

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015280246734619

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012590885162354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012590885162354

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0016579627990723

SELECT *
FROM `examination`
WHERE `examination_id` = 217 
 Execution Time:0.0009918212890625

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00042891502380371

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0019540786743164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.00050783157348633

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00078511238098145

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=217 
 Execution Time:0.0013020038604736

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=217 
 Execution Time:0.0012640953063965

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=217 
 Execution Time:0.0011959075927734

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=217 
 Execution Time:0.0010199546813965

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='217' and office_id='1' 
 Execution Time:0.001352071762085

select * from examination_chargesdetails where  examination_id= '217' 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011589527130127

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011610984802246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011610984802246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011610984802246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011610984802246

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select count(*) as cnt from patient_registration where  patient_registration_id= '188' and  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_registration where  patient_registration_id= '188' and  office_id= '1' 
 Execution Time:0.00041699409484863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='188' and  doctors_registration.office_id= '1' 
 Execution Time:0.00095391273498535

select count(*) as cnt from patient_registration where  patient_registration_id= '188' and  office_id= '1' 
 Execution Time:0.00041699409484863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='188' and  doctors_registration.office_id= '1' 
 Execution Time:0.00095391273498535

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='188' and  office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001183032989502

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001183032989502

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022792816162109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015139579772949

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00026416778564453

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 256 
 Execution Time:0.00043678283691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 256 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.0004119873046875

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 256 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017471313476562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00042295455932617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 256 
 Execution Time:0.00031805038452148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 188 
 Execution Time:0.00072193145751953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00093412399291992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00136399269104

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00136399269104

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from examination where examination_id= '218' and   office_id= '1' 
 Execution Time:0.00094914436340332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 218 
 Execution Time:0.00039792060852051

select * from examination_chargesdetails where  examination_id= '218' 
 Execution Time:0.00053596496582031

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0018448829650879

select count(*) as cnt from ipdcharge where  name = 'Cataract' and office_id= '1' 
 Execution Time:0.00061893463134766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.00024509429931641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 255 
 Execution Time:0.00016093254089355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 238 
 Execution Time:0.00073003768920898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069713592529297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069713592529297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036215782165527

select * from examination where examination_id= '217' and   office_id= '1' 
 Execution Time:0.00075602531433105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 217 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '217' 
 Execution Time:0.00026202201843262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060391426086426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060391426086426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0070879459381104

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='73' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061893463134766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.00020694732666016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 255 
 Execution Time:0.00015997886657715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 238 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select * from examination where examination_id= '217' and   office_id= '1' 
 Execution Time:0.0012509822845459

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 217 
 Execution Time:0.00043010711669922

select * from examination_chargesdetails where  examination_id= '217' 
 Execution Time:0.00043797492980957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043916702270508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043916702270508

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047612190246582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047612190246582

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0009310245513916

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0009310245513916

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013179779052734

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013179779052734

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013179779052734

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select user_id,name from  user where user_type=6 
 Execution Time:0.00052785873413086

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013179779052734

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select user_id,name from  user where user_type=6 
 Execution Time:0.00052785873413086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000762939453125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000762939453125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015890598297119

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018470287322998

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018470287322998

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00082015991210938

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00082015991210938

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00082015991210938

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select user_id,name from  user where user_type=6 
 Execution Time:0.00038909912109375

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='1' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00082015991210938

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select user_id,name from  user where user_type=6 
 Execution Time:0.00038909912109375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088405609130859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088405609130859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 238 
 Execution Time:0.00022315979003906

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 255 
 Execution Time:0.00028204917907715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 238 
 Execution Time:0.0005638599395752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from examination where examination_id= '217' and   office_id= '1' 
 Execution Time:0.00083780288696289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040519237518311

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 217 
 Execution Time:0.00136399269104

select * from examination_chargesdetails where  examination_id= '217' 
 Execution Time:0.00038599967956543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078010559082031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011990070343018

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011990070343018

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075006484985352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075006484985352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069904327392578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069904327392578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0014159679412842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051283836364746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.0005958080291748

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 256 
 Execution Time:0.00060796737670898

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 188 
 Execution Time:0.0010409355163574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010149478912354

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010149478912354

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003049373626709

select * from examination where examination_id= '218' and   office_id= '1' 
 Execution Time:0.00083589553833008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012249946594238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 218 
 Execution Time:0.00048184394836426

select * from examination_chargesdetails where  examination_id= '218' 
 Execution Time:0.00042390823364258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079798698425293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079798698425293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063800811767578

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062990188598633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 239 
 Execution Time:0.00028705596923828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 257 
 Execution Time:0.0009620189666748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065398216247559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065398216247559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036883354187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055980682373047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055980682373047

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 239 
 Execution Time:0.00044989585876465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 257 
 Execution Time:0.00026798248291016

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 239 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select * from examination where examination_id= '219' and   office_id= '1' 
 Execution Time:0.00072503089904785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 219 
 Execution Time:0.00073885917663574

select * from examination_chargesdetails where  examination_id= '219' 
 Execution Time:0.00041604042053223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083494186401367

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083494186401367

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068521499633789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068521499633789

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022792816162109

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011088848114014

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042967796325684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042967796325684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042967796325684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042967796325684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018699169158936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042967796325684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018699169158936

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019180774688721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020439624786377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015549659729004

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013659000396729

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042967796325684

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018699169158936

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094413757324219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0077121257781982

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044660568237305

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0077121257781982

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044660568237305

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0058979988098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0077121257781982

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044660568237305

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0058979988098145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 240 
 Execution Time:0.0010848045349121

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 258 
 Execution Time:0.0008702278137207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0084929466247559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0084929466247559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0040369033813477

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030539035797119

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030539035797119

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030539035797119

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0058510303497314

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 232 
 Execution Time:0.0067858695983887

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 249 
 Execution Time:0.0029699802398682

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 232 
 Execution Time:0.0059399604797363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.013643980026245

select * from examination where examination_id= '210' and   office_id= '1' 
 Execution Time:0.0034120082855225

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016920566558838

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 210 
 Execution Time:0.011748075485229

select * from examination_chargesdetails where  examination_id= '210' 
 Execution Time:0.018316984176636

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017753839492798

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.017753839492798

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0087881088256836

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0043721199035645

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0043721199035645

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038919448852539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 228 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 245 
 Execution Time:0.00035810470581055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 228 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select * from examination where examination_id= '214' and   office_id= '1' 
 Execution Time:0.00082707405090332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 214 
 Execution Time:0.0002138614654541

select * from examination_chargesdetails where  examination_id= '214' 
 Execution Time:0.00019192695617676

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00049901008605957

SELECT *
FROM `examination`
WHERE `examination_id` = 196 
 Execution Time:0.00063300132751465

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00031709671020508

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00029706954956055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 217 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0013360977172852

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=196 
 Execution Time:0.00075411796569824

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=196 
 Execution Time:0.00068116188049316

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=196 
 Execution Time:0.00059795379638672

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=196 
 Execution Time:0.00023102760314941

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='196' and office_id='1' 
 Execution Time:0.00058984756469727

select * from examination_chargesdetails where  examination_id= '196' 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013890266418457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013890266418457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021460056304932

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013999938964844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012838840484619

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00118088722229

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00097298622131348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013890266418457

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0009610652923584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027880668640137

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027880668640137

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018231868743896

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027880668640137

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018231868743896

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 217 
 Execution Time:0.0011420249938965

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 234 
 Execution Time:0.0021438598632812

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 217 
 Execution Time:0.0013139247894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003058910369873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042986869812012

select * from examination where examination_id= '196' and   office_id= '1' 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 196 
 Execution Time:0.00045013427734375

select * from examination_chargesdetails where  examination_id= '196' 
 Execution Time:0.00031685829162598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023279190063477

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023279190063477

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023279190063477

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 206 
 Execution Time:0.00038003921508789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 221 
 Execution Time:0.00037002563476562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 206 
 Execution Time:0.0009760856628418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select * from examination where examination_id= '184' and   office_id= '1' 
 Execution Time:0.00098991394042969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 184 
 Execution Time:0.00020313262939453

select * from examination_chargesdetails where  examination_id= '184' 
 Execution Time:0.00018715858459473

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048708915710449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048708915710449

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022869110107422

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 213 
 Execution Time:0.00038313865661621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 230 
 Execution Time:0.0004119873046875

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 213 
 Execution Time:0.00088691711425781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select * from examination where examination_id= '192' and   office_id= '1' 
 Execution Time:0.0025382041931152

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0031380653381348

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 192 
 Execution Time:0.0029308795928955

select * from examination_chargesdetails where  examination_id= '192' 
 Execution Time:0.0069618225097656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090193748474121

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00090193748474121

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020508766174316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020508766174316

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012431144714355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 221 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 238 
 Execution Time:0.00028204917907715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 221 
 Execution Time:0.00080394744873047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045680999755859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045680999755859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select * from examination where examination_id= '199' and   office_id= '1' 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 199 
 Execution Time:0.00017309188842773

select * from examination_chargesdetails where  examination_id= '199' 
 Execution Time:0.00013995170593262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028681755065918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028681755065918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00032615661621094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00023913383483887

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 185 
 Execution Time:0.00061392784118652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095105171203613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00095105171203613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059080123901367

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010988712310791

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010988712310791

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015809535980225

select * from examination where examination_id= '167' and   office_id= '1' 
 Execution Time:0.0038628578186035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0049788951873779

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 167 
 Execution Time:0.0029659271240234

select * from examination_chargesdetails where  examination_id= '167' 
 Execution Time:0.0039010047912598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 194 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 206 
 Execution Time:0.0014510154724121

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 194 
 Execution Time:0.0013041496276855

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029511451721191

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029511451721191

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032579898834229

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034785270690918

select * from examination where examination_id= '180' and   office_id= '1' 
 Execution Time:0.0022718906402588

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 180 
 Execution Time:0.0011670589447021

select * from examination_chargesdetails where  examination_id= '180' 
 Execution Time:0.0036211013793945

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099086761474609

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099086761474609

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 176 
 Execution Time:0.00034594535827637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 187 
 Execution Time:0.0004279613494873

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 176 
 Execution Time:0.00082802772521973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select * from examination where examination_id= '154' and   office_id= '1' 
 Execution Time:0.0019199848175049

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 154 
 Execution Time:0.0034050941467285

select * from examination_chargesdetails where  examination_id= '154' 
 Execution Time:0.003957986831665

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034430027008057

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034430027008057

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039570331573486

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017540454864502

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017540454864502

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0071508884429932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010359287261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081205368041992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082015991210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 171 
 Execution Time:0.00043010711669922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.00035810470581055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 171 
 Execution Time:0.00080490112304688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 171 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.00023293495178223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 171 
 Execution Time:0.00078296661376953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from examination where examination_id= '149' and   office_id= '1' 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0061750411987305

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 149 
 Execution Time:0.00022506713867188

select * from examination_chargesdetails where  examination_id= '149' 
 Execution Time:0.00018095970153809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029420852661133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 170 
 Execution Time:0.00030303001403809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 181 
 Execution Time:0.00031399726867676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 170 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select * from examination where examination_id= '153' and   office_id= '1' 
 Execution Time:0.00070786476135254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 153 
 Execution Time:0.00013899803161621

select * from examination_chargesdetails where  examination_id= '153' 
 Execution Time:0.00014114379882812

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054812431335449

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0074770450592041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013618469238281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0074770450592041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013618469238281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0074770450592041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013618469238281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.003593921661377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 240 
 Execution Time:0.001427173614502

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 258 
 Execution Time:0.0036327838897705

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 240 
 Execution Time:0.0038769245147705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002068042755127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043821334838867

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 240 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 258 
 Execution Time:0.00037002563476562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 240 
 Execution Time:0.00077104568481445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 240 
 Execution Time:0.00045108795166016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 258 
 Execution Time:0.00038790702819824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 240 
 Execution Time:0.00083708763122559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014770030975342

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014770030975342

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024521350860596

select * from examination where examination_id= '220' and   office_id= '1' 
 Execution Time:0.0014898777008057

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 220 
 Execution Time:0.00067901611328125

select * from examination_chargesdetails where  examination_id= '220' 
 Execution Time:0.00026202201843262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057888031005859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 130 
 Execution Time:0.00035881996154785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 138 
 Execution Time:0.00015997886657715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 130 
 Execution Time:0.00048708915710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 130 
 Execution Time:0.00035881996154785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 138 
 Execution Time:0.00028395652770996

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 130 
 Execution Time:0.0013308525085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select * from examination where examination_id= '117' and   office_id= '1' 
 Execution Time:0.0023691654205322

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 117 
 Execution Time:0.0036311149597168

select * from examination_chargesdetails where  examination_id= '117' 
 Execution Time:0.0039529800415039

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002739429473877

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043416023254395

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043416023254395

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 131 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 139 
 Execution Time:0.00016093254089355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 131 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050187110900879

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027179718017578

select * from examination where examination_id= '120' and   office_id= '1' 
 Execution Time:0.00060606002807617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 120 
 Execution Time:0.0003359317779541

select * from examination_chargesdetails where  examination_id= '120' 
 Execution Time:0.00018906593322754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 66 
 Execution Time:0.00031018257141113

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 70 
 Execution Time:0.00020289421081543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 66 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select * from examination where examination_id= '68' and   office_id= '1' 
 Execution Time:0.0010819435119629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 68 
 Execution Time:0.00043702125549316

select * from examination_chargesdetails where  examination_id= '68' 
 Execution Time:0.00046801567077637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030684471130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00036883354187012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00080394744873047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.0002751350402832

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00027108192443848

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00059986114501953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014920234680176

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00078105926513672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00012397766113281

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00010800361633301

select * from investigation where  investigation_id=2  and office_id= 1 and status=1 
 Execution Time:0.00078296661376953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 65 
 Execution Time:0.00031709671020508

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 61 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 65 
 Execution Time:0.00023007392883301

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 61 
 Execution Time:0.0007789134979248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051403045654297

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select * from examination where examination_id= '61' and   office_id= '1' 
 Execution Time:0.00091004371643066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 61 
 Execution Time:0.00023198127746582

select * from examination_chargesdetails where  examination_id= '61' 
 Execution Time:0.00020408630371094

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00067996978759766

SELECT *
FROM `examination`
WHERE `examination_id` = 220 
 Execution Time:0.00054502487182617

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00021195411682129

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00036716461181641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 240 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00014495849609375

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=220 
 Execution Time:0.00048398971557617

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=220 
 Execution Time:0.00026297569274902

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=220 
 Execution Time:0.00023913383483887

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=220 
 Execution Time:0.00044798851013184

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='220' and office_id='1' 
 Execution Time:0.00040602684020996

select * from examination_chargesdetails where  examination_id= '220' 
 Execution Time:0.00016999244689941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 23 
 Execution Time:0.00035881996154785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 24 
 Execution Time:0.00030088424682617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 23 
 Execution Time:0.0008549690246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 23 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 24 
 Execution Time:0.00016593933105469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 23 
 Execution Time:0.00052905082702637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092482566833496

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092482566833496

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032997131347656

select * from examination where examination_id= '23' and   office_id= '1' 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 23 
 Execution Time:0.00019693374633789

select * from examination_chargesdetails where  examination_id= '23' 
 Execution Time:0.00017094612121582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 7 
 Execution Time:0.00025486946105957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 8 
 Execution Time:0.00020790100097656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 7 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025606155395508

select * from examination where examination_id= '5' and   office_id= '1' 
 Execution Time:0.00071811676025391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 5 
 Execution Time:0.00015807151794434

select * from examination_chargesdetails where  examination_id= '5' 
 Execution Time:0.00014495849609375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068283081054688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068283081054688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011889934539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011889934539795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011889934539795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 9 
 Execution Time:0.00040507316589355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 10 
 Execution Time:0.00023984909057617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 9 
 Execution Time:0.00076413154602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from examination where examination_id= '9' and   office_id= '1' 
 Execution Time:0.0043580532073975

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 9 
 Execution Time:0.00072288513183594

select * from examination_chargesdetails where  examination_id= '9' 
 Execution Time:0.00039410591125488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090217590332031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002626895904541

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.00030708312988281

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='241' and  doctors_registration.office_id= '1' 
 Execution Time:0.00052022933959961

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.00030708312988281

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='241' and  doctors_registration.office_id= '1' 
 Execution Time:0.00052022933959961

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='241' and  office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047779083251953

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047779083251953

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028491020202637

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0021400451660156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 6 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 7 
 Execution Time:0.0001530647277832

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 6 
 Execution Time:0.00058293342590332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select * from examination where examination_id= '12' and   office_id= '1' 
 Execution Time:0.0006110668182373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 12 
 Execution Time:0.00027203559875488

select * from examination_chargesdetails where  examination_id= '12' 
 Execution Time:0.00056600570678711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002601146697998

select count(*) as cnt from investigation where  name = 'Salina Wash' and office_id= '1' 
 Execution Time:0.00047612190246582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.00032901763916016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='241' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015041828155518

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.00032901763916016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='241' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015041828155518

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='241' and  office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014259815216064

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014259815216064

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00020194053649902

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 241 
 Execution Time:0.00075292587280273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.0022280216217041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00027203559875488

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 241 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select * from examination where examination_id= '221' and   office_id= '1' 
 Execution Time:0.00068116188049316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 221 
 Execution Time:0.00011682510375977

select * from examination_chargesdetails where  examination_id= '221' 
 Execution Time:9.8943710327148E-5

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069808959960938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069808959960938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024890899658203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 90 
 Execution Time:0.00034880638122559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 95 
 Execution Time:0.00046515464782715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 90 
 Execution Time:0.00076699256896973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015652179718018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015652179718018

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select * from examination where examination_id= '77' and   office_id= '1' 
 Execution Time:0.0011157989501953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 77 
 Execution Time:0.0010411739349365

select * from examination_chargesdetails where  examination_id= '77' 
 Execution Time:0.0001981258392334

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015959739685059

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015959739685059

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086116790771484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032782554626465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032782554626465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031781196594238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00026798248291016

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 241 
 Execution Time:0.00066089630126953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077509880065918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077509880065918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select * from examination where examination_id= '221' and   office_id= '1' 
 Execution Time:0.00075197219848633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 221 
 Execution Time:0.0005190372467041

select * from examination_chargesdetails where  examination_id= '221' 
 Execution Time:0.00055885314941406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094890594482422

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094890594482422

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00019001960754395

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 241 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.0002601146697998

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 241 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0040709972381592

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0040709972381592

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0042271614074707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select * from examination where examination_id= '221' and   office_id= '1' 
 Execution Time:0.00054693222045898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 221 
 Execution Time:0.00019097328186035

select * from examination_chargesdetails where  examination_id= '221' 
 Execution Time:0.00023579597473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00034809112548828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00020480155944824

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 54 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 58 
 Execution Time:0.00018811225891113

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 54 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select * from examination where examination_id= '54' and   office_id= '1' 
 Execution Time:0.00069189071655273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 54 
 Execution Time:0.00078296661376953

select * from examination_chargesdetails where  examination_id= '54' 
 Execution Time:0.00028109550476074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034403800964355

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027918815612793

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0034670829772949

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='25' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0034611225128174

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070714950561523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00019598007202148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 65 
 Execution Time:0.00014305114746094

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 61 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044012069702148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088787078857422

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088787078857422

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022978782653809

select * from examination where examination_id= '61' and   office_id= '1' 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 61 
 Execution Time:0.0001678466796875

select * from examination_chargesdetails where  examination_id= '61' 
 Execution Time:0.00016593933105469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00029993057250977

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 241 
 Execution Time:0.00054287910461426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from examination where examination_id= '221' and   office_id= '1' 
 Execution Time:0.00088596343994141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 221 
 Execution Time:0.0002131462097168

select * from examination_chargesdetails where  examination_id= '221' 
 Execution Time:0.00021100044250488

select * from examination where examination_id= '221' and   office_id= '1' 
 Execution Time:0.00088596343994141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 221 
 Execution Time:0.0002131462097168

select * from examination_chargesdetails where  examination_id= '221' 
 Execution Time:0.00021100044250488

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0001978874206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 91 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 96 
 Execution Time:0.00033783912658691

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 91 
 Execution Time:0.00077581405639648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 91 
 Execution Time:0.0002131462097168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 96 
 Execution Time:0.00016307830810547

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 91 
 Execution Time:0.00055813789367676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043988227844238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068306922912598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068306922912598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022196769714355

select * from examination where examination_id= '78' and   office_id= '1' 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 78 
 Execution Time:0.00017380714416504

select * from examination_chargesdetails where  examination_id= '78' 
 Execution Time:0.00012302398681641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 89 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 94 
 Execution Time:0.00022006034851074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 89 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 89 
 Execution Time:0.00034284591674805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 94 
 Execution Time:0.00026988983154297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 89 
 Execution Time:0.00084304809570312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041389465332031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034213066101074

select * from examination where examination_id= '83' and   office_id= '1' 
 Execution Time:0.00092411041259766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044589042663574

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 83 
 Execution Time:0.00072598457336426

select * from examination_chargesdetails where  examination_id= '83' 
 Execution Time:0.0015649795532227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 241 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 259 
 Execution Time:0.00025606155395508

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 241 
 Execution Time:0.00093197822570801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041580200195312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041580200195312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010969638824463

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010969638824463

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049710273742676

select * from examination where examination_id= '221' and   office_id= '1' 
 Execution Time:0.00087809562683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 221 
 Execution Time:0.0002288818359375

select * from examination_chargesdetails where  examination_id= '221' 
 Execution Time:0.00019502639770508

select * from examination where examination_id= '221' and   office_id= '1' 
 Execution Time:0.00087809562683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 221 
 Execution Time:0.0002288818359375

select * from examination_chargesdetails where  examination_id= '221' 
 Execution Time:0.00019502639770508

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00042581558227539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081992149353027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081992149353027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081992149353027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072312355041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072312355041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072312355041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072312355041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066614151000977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072312355041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066614151000977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0006709098815918

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0006709098815918

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00021100044250488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063896179199219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063896179199219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015230178833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015230178833008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015230178833008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059890747070312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046682357788086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046682357788086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098013877868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098013877868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098013877868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006718635559082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079822540283203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006718635559082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040102005004883

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00017404556274414

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00040888786315918

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0002131462097168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078010559082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072598457336426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011630058288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078010559082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.00063085556030273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 262 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011839866638184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011839866638184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027990341186523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 262 
 Execution Time:0.00017690658569336

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 244 
 Execution Time:0.00045084953308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select * from examination where examination_id= '222' and   office_id= '1' 
 Execution Time:0.00076413154602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 222 
 Execution Time:0.00094413757324219

select * from examination_chargesdetails where  examination_id= '222' 
 Execution Time:0.00079202651977539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011398792266846

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011398792266846

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 243 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 261 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064587593078613

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064587593078613

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 242 
 Execution Time:0.00038981437683105

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 260 
 Execution Time:0.00039911270141602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019879341125488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019879341125488

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 243 
 Execution Time:0.00079011917114258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 261 
 Execution Time:0.0033988952636719

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 243 
 Execution Time:0.0026519298553467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 243 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 261 
 Execution Time:0.00021910667419434

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 243 
 Execution Time:0.00077700614929199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061988830566406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061988830566406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035905838012695

select * from examination where examination_id= '223' and   office_id= '1' 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 223 
 Execution Time:0.00033903121948242

select * from examination_chargesdetails where  examination_id= '223' 
 Execution Time:0.00031304359436035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069689750671387

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069689750671387

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019760131835938

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00070095062255859

SELECT *
FROM `examination`
WHERE `examination_id` = 223 
 Execution Time:0.00068116188049316

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00023913383483887

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00051617622375488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 243 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00057291984558105

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=223 
 Execution Time:0.0029850006103516

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=223 
 Execution Time:0.00062012672424316

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=223 
 Execution Time:0.00028085708618164

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=223 
 Execution Time:0.00025415420532227

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='223' and office_id='1' 
 Execution Time:0.00052881240844727

select * from examination_chargesdetails where  examination_id= '223' 
 Execution Time:0.00045990943908691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 243 
 Execution Time:0.00034189224243164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 261 
 Execution Time:0.00027799606323242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 243 
 Execution Time:0.00088000297546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select * from examination where examination_id= '223' and   office_id= '1' 
 Execution Time:0.00080990791320801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 223 
 Execution Time:0.00017285346984863

select * from examination_chargesdetails where  examination_id= '223' 
 Execution Time:0.00016093254089355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021815299987793

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054121017456055

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 262 
 Execution Time:0.00029397010803223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 244 
 Execution Time:0.0014619827270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081086158752441

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081086158752441

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038480758666992

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060200691223145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from examination where examination_id= '222' and   office_id= '1' 
 Execution Time:0.0009009838104248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 222 
 Execution Time:0.00036907196044922

select * from examination_chargesdetails where  examination_id= '222' 
 Execution Time:0.00030994415283203

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00047397613525391

SELECT *
FROM `examination`
WHERE `examination_id` = 223 
 Execution Time:0.00080013275146484

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00029802322387695

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00051307678222656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 243 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00052404403686523

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=223 
 Execution Time:0.001007080078125

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=223 
 Execution Time:0.00059294700622559

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=223 
 Execution Time:0.00041699409484863

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=223 
 Execution Time:0.00061702728271484

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='223' and office_id='1' 
 Execution Time:0.00083804130554199

select * from examination_chargesdetails where  examination_id= '223' 
 Execution Time:0.00034308433532715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0041468143463135

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016188621520996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0041468143463135

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 243 
 Execution Time:0.0038139820098877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 261 
 Execution Time:0.0003821849822998

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 243 
 Execution Time:0.0036060810089111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039680004119873

select * from examination where examination_id= '223' and   office_id= '1' 
 Execution Time:0.0011610984802246

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0092620849609375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 223 
 Execution Time:0.00032901763916016

select * from examination_chargesdetails where  examination_id= '223' 
 Execution Time:0.0002131462097168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036311149597168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036311149597168

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000579833984375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000579833984375

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012688636779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079584121704102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079584121704102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017809867858887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079584121704102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012421607971191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00029921531677246

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00029921531677246

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='244' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from patient_registration where  patient_registration_id= '244' and  office_id= '1' 
 Execution Time:0.00029921531677246

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='244' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054287910461426

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='244' and  office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037980079650879

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 262 
 Execution Time:0.00019693374633789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 244 
 Execution Time:0.00072693824768066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select * from examination where examination_id= '222' and   office_id= '1' 
 Execution Time:0.00056290626525879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 222 
 Execution Time:0.00017690658569336

select * from examination_chargesdetails where  examination_id= '222' 
 Execution Time:0.00013995170593262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031113624572754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054597854614258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054597854614258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006248950958252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006248950958252

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00060892105102539

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='14' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00094890594482422

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007319450378418

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='87' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00090599060058594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011720657348633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 242 
 Execution Time:0.00046706199645996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 260 
 Execution Time:0.00032401084899902

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 242 
 Execution Time:0.00092005729675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select * from examination where examination_id= '224' and   office_id= '1' 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 224 
 Execution Time:0.00025391578674316

select * from examination_chargesdetails where  examination_id= '224' 
 Execution Time:0.00027298927307129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010361671447754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010361671447754

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047516822814941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059080123901367

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059080123901367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 244 
 Execution Time:0.0008399486541748

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 262 
 Execution Time:0.00060606002807617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 244 
 Execution Time:0.0038430690765381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select * from examination where examination_id= '222' and   office_id= '1' 
 Execution Time:0.0011050701141357

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023679733276367

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 222 
 Execution Time:0.0035500526428223

select * from examination_chargesdetails where  examination_id= '222' 
 Execution Time:0.0019819736480713

select * from examination where examination_id= '222' and   office_id= '1' 
 Execution Time:0.0011050701141357

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023679733276367

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 222 
 Execution Time:0.0035500526428223

select * from examination_chargesdetails where  examination_id= '222' 
 Execution Time:0.0019819736480713

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003361701965332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030629634857178

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0004429817199707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072503089904785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 245 
 Execution Time:0.00019097328186035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 263 
 Execution Time:0.00014305114746094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029492378234863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 242 
 Execution Time:0.00022482872009277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 260 
 Execution Time:0.00015592575073242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 242 
 Execution Time:0.0005488395690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032186508178711

select * from examination where examination_id= '224' and   office_id= '1' 
 Execution Time:0.00065493583679199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067520141601562

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 224 
 Execution Time:0.00038599967956543

select * from examination_chargesdetails where  examination_id= '224' 
 Execution Time:0.0002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00076985359191895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 245 
 Execution Time:0.00027084350585938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 263 
 Execution Time:0.00018310546875

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 245 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 245 
 Execution Time:0.00044488906860352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 263 
 Execution Time:0.00037407875061035

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 245 
 Execution Time:0.00098609924316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029110908508301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select * from examination where examination_id= '225' and   office_id= '1' 
 Execution Time:0.00057506561279297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 225 
 Execution Time:0.00037002563476562

select * from examination_chargesdetails where  examination_id= '225' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057315826416016

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='14' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070405006408691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028681755065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066900253295898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109


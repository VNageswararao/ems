select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002108097076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002108097076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002108097076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002108097076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.01616382598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023069381713867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023539066314697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002108097076416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019218921661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.01616382598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056741237640381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063800811767578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063800811767578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063800811767578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063800811767578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054290294647217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064206123352051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074505805969238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050909519195557

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.00032711029052734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027120113372803

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.00032711029052734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027120113372803

select fname,lname,mrdno from patient_registration where  patient_registration_id='2446' and  office_id= '1' 
 Execution Time:0.0001988410949707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015008449554443

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015008449554443

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011110305786133

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068306922912598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052118301391602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052118301391602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087213516235352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061120986938477

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079488754272461

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00079488754272461

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026822090148926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043582916259766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004194974899292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005479097366333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054140090942383

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054140090942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054140090942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027627944946289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054140090942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027627944946289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054140090942383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027627944946289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025458335876465

select count(*) as cnt from patient_registration where  patient_registration_id= '2859' and  office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_registration where  patient_registration_id= '2859' and  office_id= '1' 
 Execution Time:0.00050497055053711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2859' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044319629669189

select count(*) as cnt from patient_registration where  patient_registration_id= '2859' and  office_id= '1' 
 Execution Time:0.00050497055053711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2859' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044319629669189

select fname,lname,mrdno from patient_registration where  patient_registration_id='2859' and  office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032501220703125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032501220703125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046689510345459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035529136657715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058388710021973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00518798828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059361457824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059361457824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059361457824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059361457824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059361457824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058431625366211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058431625366211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058431625366211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058431625366211

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0013430118560791

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0013430118560791

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-26' and '2021-11-26' and  patient_registration.office_id= 1      
 Execution Time:0.0027589797973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059499740600586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-25' and  '2021-11-25' and  billing_master.office_id= 1        
 Execution Time:0.0010859966278076

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-25' and  '2021-11-25' and  billing_master.office_id= 1        
 Execution Time:0.0010859966278076

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-25' and '2021-11-25' and  patient_registration.office_id= 1      
 Execution Time:0.0034558773040771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015578269958496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015578269958496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015578269958496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015578269958496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015578269958496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015578269958496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024051666259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015578269958496

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072100162506104

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-25' and  '2021-11-25' and  billing_master.office_id= 1        
 Execution Time:0.0017199516296387

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-25' and  '2021-11-25' and  billing_master.office_id= 1        
 Execution Time:0.0017199516296387

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-25' and '2021-11-25' and  patient_registration.office_id= 1      
 Execution Time:0.0051639080047607

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00051999092102051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.004478931427002

select count(*) as cnt from patient_registration where  patient_registration_id= '1746' and  office_id= '1' 
 Execution Time:0.00051999092102051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1746' and  doctors_registration.office_id= '1' 
 Execution Time:0.004478931427002

select fname,lname,mrdno from patient_registration where  patient_registration_id='1746' and  office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070285797119141

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00070285797119141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049839019775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049839019775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049839019775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049839019775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0030019283294678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0014679431915283

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0014679431915283

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-26' and '2021-11-26' and  patient_registration.office_id= 1      
 Execution Time:0.002554178237915

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075483322143555

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075483322143555

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017499923706055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.018785953521729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.018785953521729

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042102336883545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.018785953521729

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042102336883545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.018785953521729

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042102336883545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.018785953521729

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042102336883545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.018785953521729

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042102336883545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.018785953521729

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042102336883545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006598949432373

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094509124755859

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094509124755859

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0021750926971436

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089287757873535

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089287757873535

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051169395446777

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0014510154724121

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0014510154724121

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006098747253418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006709098815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048494338989258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006709098815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055310726165771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033419132232666

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077700614929199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087189674377441

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064992904663086

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021910667419434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067400932312012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067400932312012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038268566131592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041248798370361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031249523162842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029220581054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036730766296387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038268566131592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041830539703369

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042359828948975

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042359828948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042359828948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042359828948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042359828948975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select count(*) as cnt from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00066995620727539

select * from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00066995620727539

select * from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00032591819763184

select * from billing_detail where  billing_master_id= '463' 
 Execution Time:0.0016570091247559

select count(*) as cnt from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00066995620727539

select * from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00032591819763184

select * from billing_detail where  billing_master_id= '463' 
 Execution Time:0.0016570091247559

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0016629695892334

select count(*) as cnt from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00066995620727539

select * from billing_master where  billing_master_id= '463' and  office_id= '1' 
 Execution Time:0.00032591819763184

select * from billing_detail where  billing_master_id= '463' 
 Execution Time:0.0016570091247559

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0016629695892334

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00028705596923828

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0029351711273193

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0029351711273193

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0078089237213135

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00076580047607422

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00076580047607422

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050289630889893

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00076580047607422

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050289630889893

select fname,lname,mrdno from patient_registration where  patient_registration_id='2841' and  office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067687034606934

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067687034606934

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089192390441895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089192390441895

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041007995605469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063180923461914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069639682769775

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070281028747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010120868682861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select count(*) as cnt from patient_registration where  patient_registration_id= '2665' and  office_id= '1' 
 Execution Time:0.001446008682251

select count(*) as cnt from patient_registration where  patient_registration_id= '2665' and  office_id= '1' 
 Execution Time:0.001446008682251

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2665' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041770935058594

select count(*) as cnt from patient_registration where  patient_registration_id= '2665' and  office_id= '1' 
 Execution Time:0.001446008682251

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2665' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041770935058594

select fname,lname,mrdno from patient_registration where  patient_registration_id='2665' and  office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049114227294922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020384788513184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060510635375977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070500373840332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067901611328125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038371086120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025768280029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025768280029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025768280029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004241943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025768280029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004241943359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035510063171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020749568939209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025768280029297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004241943359375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035510063171387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044500827789307

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00061798095703125

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031185150146484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050091743469238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043821334838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00382399559021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00382399559021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00382399559021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027761459350586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00382399559021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027761459350586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037589073181152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037539005279541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00382399559021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027761459350586

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037589073181152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015079021453857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013566970825195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013566970825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013566970825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013566970825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013566970825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034809112548828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038261413574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003425121307373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-24' and  '2021-11-24' and  billing_master.office_id= 1        
 Execution Time:0.0015590190887451

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-24' and  '2021-11-24' and  billing_master.office_id= 1        
 Execution Time:0.0015590190887451

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-24' and '2021-11-24' and  patient_registration.office_id= 1      
 Execution Time:0.0045990943908691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056359767913818

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056359767913818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056359767913818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056359767913818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056359767913818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040290355682373

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040290355682373

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0074539184570312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014259815216064

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014259815216064

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058722496032715

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053839683532715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034093856811523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011401176452637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007328987121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007328987121582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013320446014404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013320446014404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032501220703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013320446014404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032501220703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013320446014404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032501220703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013320446014404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032501220703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0052750110626221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067708492279053

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013320446014404

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032501220703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081706047058105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048179626464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043339729309082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043339729309082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029819011688232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043339729309082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029819011688232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043339729309082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029819011688232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090599060058594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043339729309082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029819011688232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090599060058594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043339729309082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029819011688232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090599060058594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034759044647217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043339729309082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029819011688232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090599060058594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034759044647217

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058491230010986

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060720443725586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060720443725586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060720443725586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060720443725586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-24' and  '2021-11-24' and  billing_master.office_id= 1        
 Execution Time:0.0015830993652344

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-24' and  '2021-11-24' and  billing_master.office_id= 1        
 Execution Time:0.0015830993652344

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-24' and '2021-11-24' and  patient_registration.office_id= 1      
 Execution Time:0.0047838687896729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061070919036865

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061070919036865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061070919036865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061070919036865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061070919036865

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037229061126709

select count(*) as cnt from patient_registration where  patient_registration_id= '2862' and  office_id= '1' 
 Execution Time:0.001317024230957

select count(*) as cnt from patient_registration where  patient_registration_id= '2862' and  office_id= '1' 
 Execution Time:0.001317024230957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2862' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038328170776367

select count(*) as cnt from patient_registration where  patient_registration_id= '2862' and  office_id= '1' 
 Execution Time:0.001317024230957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2862' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038328170776367

select fname,lname,mrdno from patient_registration where  patient_registration_id='2862' and  office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030488967895508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030488967895508

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034041404724121

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00053882598876953

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00078582763671875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060079097747803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060079097747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060079097747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060079097747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060079097747803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031218528747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031218528747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032069683074951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037610530853271

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030689239501953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031218528747559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032069683074951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084061622619629

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001884937286377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001884937286377

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032639503479004

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004417896270752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004417896270752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023269653320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005180835723877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005180835723877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005180835723877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005180835723877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056219100952148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056159496307373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-25' and  '2021-11-25' and  billing_master.office_id= 1        
 Execution Time:0.0020589828491211

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-25' and  '2021-11-25' and  billing_master.office_id= 1        
 Execution Time:0.0020589828491211

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-25' and '2021-11-25' and  patient_registration.office_id= 1      
 Execution Time:0.0051219463348389

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034279823303223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034279823303223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035550594329834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012500286102295

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012500286102295

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035419464111328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035419464111328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035419464111328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039260387420654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035419464111328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039260387420654

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035419464111328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039260387420654

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035419464111328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039260387420654

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048770904541016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035419464111328

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039260387420654

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010329961776733

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020856142044067

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020856142044067

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.053429126739502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020856142044067

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.053429126739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.063430070877075

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020856142044067

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.053429126739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.063430070877075

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.025004148483276

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020856142044067

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.053429126739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.063430070877075

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.025004148483276

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020856142044067

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.053429126739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.063430070877075

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.025004148483276

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.025243997573853

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032250881195068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.020856142044067

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.053429126739502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.063430070877075

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.025004148483276

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.025243997573853

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00083708763122559

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00083708763122559

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00069284439086914

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0031960010528564

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0031960010528564

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0081789493560791

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00060677528381348

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00060677528381348

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090789794921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090789794921875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090885162353516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038008689880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038008689880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038008689880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038008689880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041139125823975

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034699440002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038008689880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037760734558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037860870361328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087988376617432

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0045380592346191

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0045380592346191

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064420700073242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064420700073242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005486011505127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0097849369049072

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0097849369049072

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0043809413909912

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0097849369049072

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028691291809082

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0043809413909912

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00050687789916992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.0058870315551758

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00042390823364258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0041770935058594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0041770935058594

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00096797943115234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0004420280456543

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.003338098526001

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.011697053909302

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00065112113952637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00037980079650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.0010190010070801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0004420280456543

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00027203559875488

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.0010190010070801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0004420280456543

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00027203559875488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053107738494873

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00067400932312012

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.0010128021240234

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00042080879211426

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00042319297790527

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0003359317779541

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00094103813171387

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00079989433288574

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00062799453735352

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.00058102607727051

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.0006098747253418

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.0003960132598877

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00067400932312012

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.0010128021240234

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00042080879211426

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00042319297790527

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0003359317779541

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00094103813171387

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00079989433288574

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00062799453735352

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.00058102607727051

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.0006098747253418

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.0003960132598877

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00032997131347656

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00064301490783691

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.0010249614715576

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00054216384887695

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00070095062255859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0003209114074707

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00072503089904785

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.0011720657348633

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00085902214050293

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.0010991096496582

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.010746955871582

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00064301490783691

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.0010249614715576

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00054216384887695

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00070095062255859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0003209114074707

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00072503089904785

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.0011720657348633

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00085902214050293

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.0010991096496582

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.010746955871582

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0022439956665039

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00016498565673828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00058889389038086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0002140998840332

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00029897689819336

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00058889389038086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0002140998840332

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00029897689819336

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00039887428283691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087404251098633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087404251098633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001255989074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005640983581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032351016998291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032351016998291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032351016998291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032351016998291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032351016998291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00060892105102539

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0011541843414307

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00053787231445312

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056040287017822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005774974822998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005774974822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005774974822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005774974822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005774974822998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035619735717773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056710243225098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010747909545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059809684753418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051460266113281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051460266113281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051460266113281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051460266113281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024161338806152

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024161338806152

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00035595893859863

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053691864013672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017590522766113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017590522766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017590522766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017590522766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017590522766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010162115097046

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017590522766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010162115097046

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017590522766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046896934509277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010162115097046

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010690689086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004284143447876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069594383239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069594383239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069594383239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046238899230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086879730224609

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069594383239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046238899230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063788890838623

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00053501129150391

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025081634521484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010809898376465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010809898376465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071883201599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046086311340332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071883201599121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050890445709229

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0005180835723877

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049996376037598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016329288482666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016329288482666

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00099587440490723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039815902709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032439231872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066018104553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052380561828613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066018104553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052719116210938

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00077986717224121

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00077986717224121

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008549690246582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008549690246582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010008811950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065100193023682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020885467529297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035469532012939

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008690357208252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008690357208252

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014350414276123

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014350414276123

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012588500976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084400177001953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005295991897583

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00075197219848633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0015048980712891

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00094795227050781

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00075197219848633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0015048980712891

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00094795227050781

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00078701972961426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039219856262207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039219856262207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043320655822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026893615722656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062894821166992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054399967193604

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00048589706420898

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.00066494941711426

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00033998489379883

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00025200843811035

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00098514556884766

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00042891502380371

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00041484832763672

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00034093856811523

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.0055210590362549

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.0006110668182373

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00030088424682617

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00048589706420898

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.00066494941711426

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00033998489379883

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00025200843811035

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00098514556884766

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00042891502380371

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00041484832763672

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00034093856811523

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.0055210590362549

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.0006110668182373

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00030088424682617

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00030612945556641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00045514106750488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054717063903809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054717063903809

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003049373626709

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.0011281967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.00040578842163086

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00031185150146484

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.0011281967163086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.00040578842163086

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00031185150146484

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01158595085144

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01158595085144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017624139785767

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01158595085144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017624139785767

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01158595085144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017624139785767

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015461444854736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01158595085144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017624139785767

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015461444854736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01158595085144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017624139785767

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015461444854736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043570995330811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.01158595085144

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.017624139785767

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016520023345947

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015461444854736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043570995330811

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023398399353027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023398399353027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035369396209717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062000751495361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023398399353027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0035369396209717

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029959678649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055010318756104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042200088500977

select count(*) as cnt from patient_registration where  patient_registration_id= '2604' and  office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from patient_registration where  patient_registration_id= '2604' and  office_id= '1' 
 Execution Time:0.00061607360839844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047948360443115

select count(*) as cnt from patient_registration where  patient_registration_id= '2604' and  office_id= '1' 
 Execution Time:0.00061607360839844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047948360443115

select fname,lname,mrdno from patient_registration where  patient_registration_id='2604' and  office_id= '1' 
 Execution Time:0.00021100044250488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064802169799805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031499862670898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034878253936768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034878253936768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034878253936768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034878253936768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034878253936768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034878253936768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034878253936768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00351881980896

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.020226955413818

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.020226955413818

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032119750976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035319328308105

select count(*) as cnt from patient_registration where  patient_registration_id= '1478' and  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_registration where  patient_registration_id= '1478' and  office_id= '1' 
 Execution Time:0.0004880428314209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1478' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041868686676025

select count(*) as cnt from patient_registration where  patient_registration_id= '1478' and  office_id= '1' 
 Execution Time:0.0004880428314209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1478' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041868686676025

select fname,lname,mrdno from patient_registration where  patient_registration_id='1478' and  office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.019574165344238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.019574165344238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010669231414795

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028009414672852

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028009414672852

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038051605224609

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038609504699707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045490264892578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095009803771973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00095009803771973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052309036254883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075006484985352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044658184051514

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025668144226074

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025668144226074

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select count(*) as cnt from patient_registration where  patient_registration_id= '2556' and  office_id= '1' 
 Execution Time:0.00049781799316406

select count(*) as cnt from patient_registration where  patient_registration_id= '2556' and  office_id= '1' 
 Execution Time:0.00049781799316406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2556' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032620429992676

select count(*) as cnt from patient_registration where  patient_registration_id= '2556' and  office_id= '1' 
 Execution Time:0.00049781799316406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2556' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032620429992676

select fname,lname,mrdno from patient_registration where  patient_registration_id='2556' and  office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039818286895752

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039818286895752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016608238220215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017971992492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017971992492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017971992492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017971992492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017971992492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017971992492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017971992492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029110908508301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010327100753784

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064489841461182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064489841461182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0091869831085205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064489841461182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0091869831085205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001248836517334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064489841461182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0091869831085205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001248836517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064489841461182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0091869831085205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001248836517334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select count(*) as cnt from patient_registration where  patient_registration_id= '2881' and  office_id= '1' 
 Execution Time:0.0012280941009521

select count(*) as cnt from patient_registration where  patient_registration_id= '2881' and  office_id= '1' 
 Execution Time:0.0012280941009521

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2881' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024430751800537

select count(*) as cnt from patient_registration where  patient_registration_id= '2881' and  office_id= '1' 
 Execution Time:0.0012280941009521

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2881' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024430751800537

select fname,lname,mrdno from patient_registration where  patient_registration_id='2881' and  office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.016564130783081

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.016564130783081

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00078797340393066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005547046661377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005547046661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005547046661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022878646850586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005547046661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022878646850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005547046661377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023369789123535

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022878646850586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075006484985352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034458637237549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026681423187256

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038549900054932

select count(*) as cnt from patient_registration where  patient_registration_id= '2403' and  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_registration where  patient_registration_id= '2403' and  office_id= '1' 
 Execution Time:0.00035500526428223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2403' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040760040283203

select count(*) as cnt from patient_registration where  patient_registration_id= '2403' and  office_id= '1' 
 Execution Time:0.00035500526428223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2403' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040760040283203

select fname,lname,mrdno from patient_registration where  patient_registration_id='2403' and  office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037813186645508

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002589225769043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_registration where  patient_registration_id= '2879' and  office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_registration where  patient_registration_id= '2879' and  office_id= '1' 
 Execution Time:0.0004119873046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2879' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043249130249023

select count(*) as cnt from patient_registration where  patient_registration_id= '2879' and  office_id= '1' 
 Execution Time:0.0004119873046875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2879' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043249130249023

select fname,lname,mrdno from patient_registration where  patient_registration_id='2879' and  office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086212158203125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086212158203125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00072002410888672

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023007392883301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039482116699219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050559043884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051240921020508

select count(*) as cnt from patient_registration where  patient_registration_id= '2883' and  office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_registration where  patient_registration_id= '2883' and  office_id= '1' 
 Execution Time:0.0003960132598877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2883' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079729557037354

select count(*) as cnt from patient_registration where  patient_registration_id= '2883' and  office_id= '1' 
 Execution Time:0.0003960132598877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2883' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079729557037354

select fname,lname,mrdno from patient_registration where  patient_registration_id='2883' and  office_id= '1' 
 Execution Time:0.0022919178009033

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038690567016602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038690567016602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038690567016602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038690567016602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038690567016602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from patient_registration where  patient_registration_id= '2883' and  office_id= '1' 
 Execution Time:0.0035970211029053

select count(*) as cnt from patient_registration where  patient_registration_id= '2883' and  office_id= '1' 
 Execution Time:0.0035970211029053

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2883' and  doctors_registration.office_id= '1' 
 Execution Time:0.006878137588501

select count(*) as cnt from patient_registration where  patient_registration_id= '2883' and  office_id= '1' 
 Execution Time:0.0035970211029053

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2883' and  doctors_registration.office_id= '1' 
 Execution Time:0.006878137588501

select fname,lname,mrdno from patient_registration where  patient_registration_id='2883' and  office_id= '1' 
 Execution Time:0.0011670589447021

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022938251495361

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0036051273345947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009009838104248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009009838104248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021240711212158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009009838104248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021240711212158

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009009838104248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021240711212158

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029969215393066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009009838104248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021240711212158

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034761428833008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0029969215393066

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010719299316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062990188598633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078892707824707

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00078892707824707

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002396821975708

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022919178009033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022919178009033

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022919178009033

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022919178009033

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038540363311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014128684997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001939058303833

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022919178009033

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038540363311768

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082230567932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037801265716553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060915946960449

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060915946960449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030899047851562

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060915946960449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030899047851562

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077414512634277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077414512634277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040411949157715

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0043370723724365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032889842987061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062730312347412

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038051605224609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032889842987061

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057010650634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057530403137207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078399181365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078399181365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023272037506104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078399181365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023272037506104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016281604766846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078399181365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023272037506104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016281604766846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021898746490479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078399181365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023272037506104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016281604766846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021898746490479

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011801958084106

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017790794372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0078399181365967

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023272037506104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016281604766846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021898746490479

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063040256500244

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062894821166992

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023818016052246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023818016052246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023818016052246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023818016052246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023818016052246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078349113464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039482116699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039482116699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039482116699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039482116699219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052108764648438

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075101852416992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066113471984863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025701522827148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050888061523438

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085306167602539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085306167602539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025479793548584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055570602416992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075697898864746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075697898864746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052120685577393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052120685577393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040760040283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052120685577393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040760040283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004335880279541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052120685577393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040760040283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004335880279541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052120685577393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040760040283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004335880279541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032827854156494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052120685577393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040760040283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004335880279541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032827854156494

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039420127868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018279552459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052120685577393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040760040283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004335880279541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032827854156494

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039420127868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063581466674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016999244689941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053369998931885

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00082302093505859

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00082302093505859

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059199333190918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053679943084717

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00017905235290527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086593627929688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086593627929688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004209041595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059318542480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059318542480469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057442188262939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047860145568848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085997581481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0056140422821045

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085997581481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005702018737793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052568912506104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052568912506104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052568912506104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057229995727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052568912506104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057229995727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052568912506104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057229995727539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_registration where  patient_registration_id= '2890' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '2890' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2890' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027918815612793

select count(*) as cnt from patient_registration where  patient_registration_id= '2890' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2890' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027918815612793

select fname,lname,mrdno from patient_registration where  patient_registration_id='2890' and  office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086879730224609

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086879730224609

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004122257232666

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.0015881061553955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001220703125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091195106506348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062401294708252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055480003356934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040698051452637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055480003356934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056819915771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059030055999756

select count(*) as cnt from patient_registration where  patient_registration_id= '2325' and  office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from patient_registration where  patient_registration_id= '2325' and  office_id= '1' 
 Execution Time:0.00058794021606445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045630931854248

select count(*) as cnt from patient_registration where  patient_registration_id= '2325' and  office_id= '1' 
 Execution Time:0.00058794021606445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2325' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045630931854248

select fname,lname,mrdno from patient_registration where  patient_registration_id='2325' and  office_id= '1' 
 Execution Time:0.0028579235076904

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053000450134277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053000450134277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039386749267578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065898895263672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023508071899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055599212646484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079379081726074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079379081726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079379081726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079379081726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079379081726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058889389038086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058889389038086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058889389038086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058889389038086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070309638977051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052971839904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061099529266357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092816352844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082087516784668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092816352844238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062119960784912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032570362091064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032570362091064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032570362091064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032570362091064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0024290084838867

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-26' and  '2021-11-26' and  billing_master.office_id= 1        
 Execution Time:0.0024290084838867

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-26' and '2021-11-26' and  patient_registration.office_id= 1      
 Execution Time:0.0047030448913574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022130012512207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 86 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00072884559631348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0046529769897461

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.0030198097229004

select * from examination where examination_id= '29' and   office_id= '1' 
 Execution Time:0.00072884559631348

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 29 
 Execution Time:0.0046529769897461

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.0030198097229004

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0023679733276367

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057101249694824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00067400932312012

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.00046801567077637

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00043988227844238

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00043010711669922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0020959377288818

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00049805641174316

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00048089027404785

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00031304359436035

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.00060009956359863

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.00055599212646484

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00026583671569824

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00067400932312012

SELECT *
FROM `examination`
WHERE `examination_id` = 29 
 Execution Time:0.00046801567077637

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00043988227844238

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00043010711669922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 61 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0020959377288818

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=29 
 Execution Time:0.00049805641174316

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=29 
 Execution Time:0.00048089027404785

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=29 
 Execution Time:0.00031304359436035

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=29 
 Execution Time:0.00060009956359863

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='29' and office_id='1' 
 Execution Time:0.00055599212646484

select * from examination_chargesdetails where  examination_id= '29' 
 Execution Time:0.00026583671569824

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00023412704467773


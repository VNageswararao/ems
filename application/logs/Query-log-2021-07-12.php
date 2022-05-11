select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002007007598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002007007598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002007007598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002007007598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039918422698975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002007007598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039918422698975

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023159980773926

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00059604644775391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_registration where  mobileno = '9000200470' and office_id= '1' 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0011489391326904

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0011489391326904

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00046682357788086

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0011489391326904

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00046682357788086

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00043988227844238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032691955566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032691955566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032691955566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032691955566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078678131103516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032691955566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078678131103516

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016372203826904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013010501861572

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032691955566406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001209020614624

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078678131103516

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016372203826904

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025579929351807

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025579929351807

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025579929351807

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020890235900879

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060200691223145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060200691223145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048303604125977

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024511814117432

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024511814117432

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002739429473877

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00056910514831543

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040411949157715

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00045108795166016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00032520294189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081515312194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081515312194824

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00057387351989746

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00057387351989746

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00039005279541016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082707405090332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089001655578613

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select * from office where  office_id= '1' 
 Execution Time:0.00077915191650391

select count(*) as cnt from patient_title where  name = 'MRS' and office_id= '1' 
 Execution Time:0.0005488395690918

select count(*) as cnt from patient_title where  name = 'MASTER' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_title where  name = 'SELVI' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from charge_type where  name = 'CONSULTATION' and office_id= '1' 
 Execution Time:0.00060009956359863

select count(*) as cnt from department where  name = 'RETINA' and office_id= '1' 
 Execution Time:0.00056290626525879

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00095391273498535

select count(*) as cnt from investigation where  name = 'HFA' and office_id= '1' 
 Execution Time:0.00050497055053711

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select count(*) as cnt from ipdcharge where  name = 'VIT' and office_id= '1' 
 Execution Time:0.00049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from appointment_type where  name = 'NEW CASE' and office_id= '1' 
 Execution Time:0.00046682357788086

select count(*) as cnt from appointment_type where  name = 'REVIEW' and office_id= '1' 
 Execution Time:0.00038290023803711

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  name = 'NEW CONSULTATION' and office_id= '1' 
 Execution Time:0.00039219856262207

select count(*) as cnt from opdcharge where  name = 'SPECIAL CONSULTATION' and office_id= '1' 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014610290527344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069689750671387

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '23' and office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from patient_title where  patient_title_id = '23' and office_id= '1' 
 Execution Time:0.00054693222045898

select gender from patient_title where  patient_title_id = '23' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00035190582275391

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00033903121948242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_registration where  mobileno = '9000200470' and office_id= '1' 
 Execution Time:0.0006248950958252

select count(*) as cnt from patient_registration where  mobileno = '9000200470' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_registration where  mobileno = '1234567898' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014071464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014071464538574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014071464538574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014071464538574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014071464538574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014071464538574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014750957489014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00069308280944824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00069308280944824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00061202049255371

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076389312744141

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076389312744141

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002589225769043

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00055909156799316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065302848815918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065302848815918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027608871459961

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00042200088500977

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00042200088500977

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00023198127746582

select * from billing_detail where  billing_master_id= '2' 
 Execution Time:0.00021886825561523

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00042200088500977

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00023198127746582

select * from billing_detail where  billing_master_id= '2' 
 Execution Time:0.00021886825561523

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00042200088500977

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00023198127746582

select * from billing_detail where  billing_master_id= '2' 
 Execution Time:0.00021886825561523

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00015902519226074

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00042390823364258

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00057387351989746

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00057387351989746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00096321105957031

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00057387351989746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00096321105957031

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00031781196594238

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018658638000488

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018141269683838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018658638000488

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0016059875488281

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00025820732116699

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.0002899169921875

select * from billing_detail where  billing_master_id= '2' 
 Execution Time:0.00037598609924316

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.0002899169921875

select * from billing_detail where  billing_master_id= '2' 
 Execution Time:0.00037598609924316

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00032877922058105

select count(*) as cnt from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.00047898292541504

select * from billing_master where  billing_master_id= '2' and  office_id= '1' 
 Execution Time:0.0002899169921875

select * from billing_detail where  billing_master_id= '2' 
 Execution Time:0.00037598609924316

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00032877922058105

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.0002288818359375

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0005490779876709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028400421142578

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0005490779876709

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028400421142578

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020759105682373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020759105682373

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109


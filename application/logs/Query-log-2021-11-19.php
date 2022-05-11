select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026111602783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023601055145264

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021598339080811

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026111602783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051088333129883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0025038719177246

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0025038719177246

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0073769092559814

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0054450035095215

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0054450035095215

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002723217010498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002723217010498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002723217010498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002723217010498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031619071960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002723217010498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031619071960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002723217010498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031619071960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002723217010498

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052189826965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031619071960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037829875946045

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056238174438477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018050670623779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018050670623779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018050670623779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018050670623779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018050670623779

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057840347290039

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083208084106445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083208084106445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011749267578125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011749267578125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068497657775879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051500797271729

select count(*) as cnt from patient_registration where  patient_registration_id= '2371' and  office_id= '1' 
 Execution Time:0.00079202651977539

select count(*) as cnt from patient_registration where  patient_registration_id= '2371' and  office_id= '1' 
 Execution Time:0.00079202651977539

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2371' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036640167236328

select count(*) as cnt from patient_registration where  patient_registration_id= '2371' and  office_id= '1' 
 Execution Time:0.00079202651977539

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2371' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036640167236328

select fname,lname,mrdno from patient_registration where  patient_registration_id='2371' and  office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063395500183105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037381649017334

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037381649017334

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001115083694458

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068902969360352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068902969360352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068902969360352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068902969360352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092697143554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051858425140381

select count(*) as cnt from patient_registration where  patient_registration_id= '2254' and  office_id= '1' 
 Execution Time:0.0029361248016357

select count(*) as cnt from patient_registration where  patient_registration_id= '2254' and  office_id= '1' 
 Execution Time:0.0029361248016357

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2254' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048370361328125

select count(*) as cnt from patient_registration where  patient_registration_id= '2254' and  office_id= '1' 
 Execution Time:0.0029361248016357

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2254' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048370361328125

select fname,lname,mrdno from patient_registration where  patient_registration_id='2254' and  office_id= '1' 
 Execution Time:0.0077919960021973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011370182037354

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011370182037354

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0027720928192139

select count(*) as cnt from patient_registration where  patient_registration_id= '650' and  office_id= '1' 
 Execution Time:0.0023341178894043

select count(*) as cnt from patient_registration where  patient_registration_id= '650' and  office_id= '1' 
 Execution Time:0.0023341178894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='650' and  doctors_registration.office_id= '1' 
 Execution Time:0.0072569847106934

select count(*) as cnt from patient_registration where  patient_registration_id= '650' and  office_id= '1' 
 Execution Time:0.0023341178894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='650' and  doctors_registration.office_id= '1' 
 Execution Time:0.0072569847106934

select fname,lname,mrdno from patient_registration where  patient_registration_id='650' and  office_id= '1' 
 Execution Time:0.0034780502319336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from patient_registration where  patient_registration_id= '2539' and  office_id= '1' 
 Execution Time:0.0024089813232422

select count(*) as cnt from patient_registration where  patient_registration_id= '2539' and  office_id= '1' 
 Execution Time:0.0024089813232422

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2539' and  doctors_registration.office_id= '1' 
 Execution Time:0.0067629814147949

select count(*) as cnt from patient_registration where  patient_registration_id= '2539' and  office_id= '1' 
 Execution Time:0.0024089813232422

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2539' and  doctors_registration.office_id= '1' 
 Execution Time:0.0067629814147949

select fname,lname,mrdno from patient_registration where  patient_registration_id='2539' and  office_id= '1' 
 Execution Time:0.0017681121826172

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016860961914062

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016860961914062

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047111511230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049588680267334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049588680267334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049588680267334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026631355285645

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049588680267334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026631355285645

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049588680267334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026631355285645

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0043048858642578

select count(*) as cnt from patient_registration where  patient_registration_id= '650' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_registration where  patient_registration_id= '650' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='650' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045008659362793

select count(*) as cnt from patient_registration where  patient_registration_id= '650' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='650' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045008659362793

select fname,lname,mrdno from patient_registration where  patient_registration_id='650' and  office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044951438903809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044951438903809

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00518798828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00518798828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00518798828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00518798828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00518798828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011739730834961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001046895980835

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00502610206604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058507919311523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001046895980835

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049118995666504

select count(*) as cnt from patient_registration where  patient_registration_id= '2537' and  office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_registration where  patient_registration_id= '2537' and  office_id= '1' 
 Execution Time:0.00049400329589844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2537' and  doctors_registration.office_id= '1' 
 Execution Time:0.003593921661377

select count(*) as cnt from patient_registration where  patient_registration_id= '2537' and  office_id= '1' 
 Execution Time:0.00049400329589844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2537' and  doctors_registration.office_id= '1' 
 Execution Time:0.003593921661377

select fname,lname,mrdno from patient_registration where  patient_registration_id='2537' and  office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055813789367676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055813789367676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006108283996582

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050997734069824

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090599060058594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090599060058594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083112716674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083112716674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083112716674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007627010345459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00083112716674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083494186401367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060000419616699

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048518180847168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048518180847168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045371055603027

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0088090896606445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0088090896606445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0073778629302979

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088286399841309

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00088286399841309

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038208961486816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050010681152344

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057291984558105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016930103302002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00382399559021

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038208961486816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070540904998779

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.0013048648834229

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.0013048648834229

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063619613647461

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.0013048648834229

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063619613647461

select fname,lname,mrdno from patient_registration where  patient_registration_id='1920' and  office_id= '1' 
 Execution Time:0.0034527778625488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069403648376465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080990791320801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070960521697998

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00040388107299805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041120052337646

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00040388107299805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041120052337646

select fname,lname,mrdno from patient_registration where  patient_registration_id='1526' and  office_id= '1' 
 Execution Time:0.00032520294189453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006742000579834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006742000579834

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023081302642822

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0025930404663086

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0025930404663086

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.013373851776123

select count(*) as cnt from patient_registration where  patient_registration_id= '2555' and  office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_registration where  patient_registration_id= '2555' and  office_id= '1' 
 Execution Time:0.0004730224609375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2555' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049848556518555

select count(*) as cnt from patient_registration where  patient_registration_id= '2555' and  office_id= '1' 
 Execution Time:0.0004730224609375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2555' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049848556518555

select fname,lname,mrdno from patient_registration where  patient_registration_id='2555' and  office_id= '1' 
 Execution Time:0.0037050247192383

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019199848175049

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019199848175049

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.001331090927124

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055108070373535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055108070373535

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055108070373535

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055108070373535

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055108070373535

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048618316650391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048618316650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048618316650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048618316650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048618316650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038061141967773

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00043702125549316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038061141967773

select fname,lname,mrdno from patient_registration where  patient_registration_id='1526' and  office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011122226715088

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011122226715088

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059280395507812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059280395507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059280395507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059280395507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022070407867432

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059280395507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075411796569824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028619766235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022070407867432

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047600269317627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047600269317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047600269317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020301342010498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047600269317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020301342010498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036671161651611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047600269317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020301342010498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036671161651611

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038928985595703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025269985198975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047600269317627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020301342010498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036671161651611

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038928985595703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067389011383057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010049343109131

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046586990356445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007169246673584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092880725860596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083498954772949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083498954772949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004223108291626

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083498954772949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004223108291626

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083498954772949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004223108291626

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083498954772949

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004223108291626

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00075578689575195

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041317939758301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041317939758301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038111209869385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003709077835083

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041317939758301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038111209869385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060470104217529

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036880970001221

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0036880970001221

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039310455322266

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062108039855957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062108039855957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072216987609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011136054992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011136054992676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.024466037750244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011136054992676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.024466037750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011136054992676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.024466037750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012609958648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.011136054992676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.024466037750244

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012609958648682

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054528713226318

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040483474731445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044329166412354

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044329166412354

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028040409088135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032739639282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032739639282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033810138702393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032739639282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033810138702393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032739639282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033810138702393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050520896911621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030930042266846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038158893585205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032739639282227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033810138702393

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002528190612793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050520896911621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086550712585449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00096893310546875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00096893310546875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026040077209473

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026040077209473

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094914436340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026628971099854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026628971099854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052931308746338

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026628971099854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052931308746338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026628971099854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052931308746338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031609535217285

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022928714752197

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026628971099854

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0052931308746338

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015308856964111

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014209747314453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080990791320801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015020370483398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082683563232422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082683563232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082683563232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067741870880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082683563232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067741870880127

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019271373748779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032260417938232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082683563232422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067741870880127

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019271373748779

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054159164428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020899772644043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00071597099304199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072710514068604

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060510635375977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035381317138672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048689842224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077295303344727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048830509185791

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00046610832214355

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003140926361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003140926361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003140926361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003140926361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032169818878174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028541088104248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034670829772949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003140926361084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013601779937744

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032169818878174

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087959766387939

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020549297332764

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0020549297332764

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024969577789307

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001629114151001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001629114151001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015921592712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001629114151001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015921592712402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001629114151001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015921592712402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013968944549561

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010881423950195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001629114151001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015921592712402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050590038299561

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074219703674316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074219703674316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084590911865234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045394897460938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018970966339111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018970966339111

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029840469360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037648677825928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018970966339111

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029840469360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062038898468018

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034301280975342

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034301280975342

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038690567016602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005650520324707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030612945556641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057120323181152

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043778419494629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043778419494629

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040590763092041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037968158721924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037968158721924

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051479339599609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032382011413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032382011413574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020711421966553

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020949840545654

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065398216247559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032382011413574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038480758666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043449401855469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069630146026611

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069630146026611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069630146026611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026159286499023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069630146026611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026159286499023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048630237579346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069630146026611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024240016937256

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026159286499023

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048630237579346

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select count(*) as cnt from patient_registration where  patient_registration_id= '2100' and  office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from patient_registration where  patient_registration_id= '2100' and  office_id= '1' 
 Execution Time:0.00043988227844238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049479007720947

select count(*) as cnt from patient_registration where  patient_registration_id= '2100' and  office_id= '1' 
 Execution Time:0.00043988227844238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049479007720947

select fname,lname,mrdno from patient_registration where  patient_registration_id='2100' and  office_id= '1' 
 Execution Time:0.0027379989624023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061709880828857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061709880828857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061709880828857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004774808883667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043330192565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0061709880828857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004774808883667

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057590007781982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072338581085205

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072338581085205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072338581085205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065708160400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0072338581085205

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select count(*) as cnt from patient_registration where  patient_registration_id= '2641' and  office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from patient_registration where  patient_registration_id= '2641' and  office_id= '1' 
 Execution Time:0.00058794021606445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2641' and  doctors_registration.office_id= '1' 
 Execution Time:0.0097348690032959

select count(*) as cnt from patient_registration where  patient_registration_id= '2641' and  office_id= '1' 
 Execution Time:0.00058794021606445

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2641' and  doctors_registration.office_id= '1' 
 Execution Time:0.0097348690032959

select fname,lname,mrdno from patient_registration where  patient_registration_id='2641' and  office_id= '1' 
 Execution Time:0.00088405609130859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023069381713867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023069381713867

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005488395690918

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.001823902130127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054869651794434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054869651794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054869651794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054869651794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034658908843994

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054869651794434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003014087677002

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036399364471436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034658908843994

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027790069580078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039005279541016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020129680633545

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011279582977295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058438777923584

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007929801940918

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007929801940918

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053215026855469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001154899597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001154899597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075340270996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001154899597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075340270996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001154899597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075340270996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026328563690186

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001154899597168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0075340270996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045919418334961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065410137176514

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031828880310059

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031828880310059

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00097298622131348

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011298656463623

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011298656463623

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052118301391602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052118301391602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052118301391602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052118301391602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047821998596191

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0032069683074951

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0032069683074951

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00092506408691406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003281831741333

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003281831741333

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069212913513184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083112716674805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083112716674805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098013877868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098013877868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098013877868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098013877868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004777193069458

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042340755462646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003760814666748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098013877868652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040791034698486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.004777193069458

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010082960128784

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00394606590271

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00394606590271

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018229484558105

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018229484558105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002155065536499

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053691864013672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065112113952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052239894866943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065779685974121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057721138000488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052840709686279

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065422058105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015599727630615

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065422058105469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057640075683594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084378719329834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084378719329834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034029483795166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084378719329834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034029483795166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084378719329834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034029483795166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084378719329834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034029483795166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029349327087402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0010981559753418

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011081695556641

select count(*) as cnt from patient_registration where  patient_registration_id= '2650' and  office_id= '1' 
 Execution Time:0.0010449886322021

select count(*) as cnt from patient_registration where  patient_registration_id= '2650' and  office_id= '1' 
 Execution Time:0.0010449886322021

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2650' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033159255981445

select count(*) as cnt from patient_registration where  patient_registration_id= '2650' and  office_id= '1' 
 Execution Time:0.0010449886322021

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2650' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033159255981445

select fname,lname,mrdno from patient_registration where  patient_registration_id='2650' and  office_id= '1' 
 Execution Time:0.0019009113311768

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017709732055664

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017709732055664

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096797943115234

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00073695182800293

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00062179565429688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00211501121521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00211501121521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041930675506592

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00211501121521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053260326385498

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012481212615967

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012481212615967

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016379356384277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016379356384277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036242008209229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048408508300781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007328987121582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010380744934082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023870468139648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044512748718262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048408508300781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069570541381836

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095009803771973

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095009803771973

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036759376525879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036759376525879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019669532775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019669532775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019669532775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019669532775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026741027832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004694938659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019669532775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010778903961182

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026741027832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011895179748535

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0063228607177734

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0063228607177734

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0074810981750488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0074810981750488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020670890808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011630058288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013761520385742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088787078857422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072884559631348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011630058288574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060789585113525

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053670406341553

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053670406341553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053670406341553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053670406341553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053670406341553

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037751197814941

select count(*) as cnt from patient_registration where  patient_registration_id= '2652' and  office_id= '1' 
 Execution Time:0.0013649463653564

select count(*) as cnt from patient_registration where  patient_registration_id= '2652' and  office_id= '1' 
 Execution Time:0.0013649463653564

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2652' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047571659088135

select count(*) as cnt from patient_registration where  patient_registration_id= '2652' and  office_id= '1' 
 Execution Time:0.0013649463653564

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2652' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047571659088135

select fname,lname,mrdno from patient_registration where  patient_registration_id='2652' and  office_id= '1' 
 Execution Time:0.002781867980957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012118816375732

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012118816375732

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054001808166504

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0028369426727295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050699710845947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050699710845947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050699710845947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050699710845947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050699710845947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013611316680908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035910606384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013611316680908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081980228424072

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00040602684020996

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00028777122497559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019838809967041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019838809967041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028278827667236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.013041973114014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004730224609375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045480728149414

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0036370754241943

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0036370754241943

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0037918090820312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057315826416016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023398399353027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023398399353027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023398399353027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091385841369629

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032877922058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023398399353027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073800086975098

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0088491439819336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0088491439819336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089192390441895

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050928592681885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050928592681885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050928592681885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024549961090088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050928592681885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024549961090088

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050928592681885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024549961090088

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025920867919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050928592681885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024549961090088

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025920867919922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023839473724365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034899711608887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050928592681885

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001539945602417

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024549961090088

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025920867919922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023839473724365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065090656280518

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001086950302124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001086950302124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001086950302124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001086950302124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030770301818848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012879371643066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012118816375732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001086950302124

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082802772521973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011489868164062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078229904174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078229904174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078229904174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067999362945557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078229904174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067999362945557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067968368530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078229904174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067999362945557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067968368530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067830085754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078229904174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067999362945557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067968368530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067830085754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067470073699951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005842924118042

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0078229904174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00677490234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0067999362945557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067968368530273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0067830085754395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067470073699951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081710815429688

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026371479034424

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026371479034424

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011789798736572

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030910968780518

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030910968780518

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019798278808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033109188079834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033109188079834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056350231170654

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009760856628418

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009760856628418

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029778480529785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029778480529785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020768642425537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027689933776855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027689933776855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027689933776855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027689933776855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002547025680542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027689933776855

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028171539306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027608871459961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068080425262451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035750865936279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035750865936279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035750865936279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035750865936279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035779476165771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024440288543701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035750865936279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019271373748779

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035779476165771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058939456939697

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048971176147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048971176147461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030341148376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030922889709473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030922889709473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030922889709473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030922889709473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030922889709473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049188137054443

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040888786315918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036919116973877

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0046689510345459

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0046689510345459

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024559497833252

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040841102600098

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040841102600098

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022130012512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022130012512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022130012512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051169395446777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022130012512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051169395446777

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084686279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033609867095947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035619735717773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022130012512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016288757324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0051169395446777

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084686279296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050959587097168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064611434936523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064611434936523

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034589767456055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058412551879883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024518966674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024518966674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024518966674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024518966674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011870861053467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024518966674805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013711452484131

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011870861053467

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069608688354492

select count(*) as cnt from patient_registration where  patient_registration_id= '2209' and  office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_registration where  patient_registration_id= '2209' and  office_id= '1' 
 Execution Time:0.00042390823364258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2209' and  doctors_registration.office_id= '1' 
 Execution Time:0.00406813621521

select count(*) as cnt from patient_registration where  patient_registration_id= '2209' and  office_id= '1' 
 Execution Time:0.00042390823364258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2209' and  doctors_registration.office_id= '1' 
 Execution Time:0.00406813621521

select fname,lname,mrdno from patient_registration where  patient_registration_id='2209' and  office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085616111755371

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00085616111755371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037779808044434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076413154602051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076413154602051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021195411682129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038208961486816

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038208961486816

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0062408447265625

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0062408447265625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034821033477783

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034821033477783

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042068958282471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042068958282471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042068958282471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042068958282471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001093864440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042068958282471

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001093864440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084600448608398

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069499015808105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069499015808105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039019584655762

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039019584655762

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012001991271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012001991271973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018599033355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012001991271973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018599033355713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012838840484619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0044879913330078

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020060539245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011720657348633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012001991271973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018599033355713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012838840484619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055489540100098

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032858848571777

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032858848571777

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0030829906463623

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018789768218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076889991760254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076889991760254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076889991760254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039608478546143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005338191986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076889991760254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091314315795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039608478546143

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086841583251953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026249885559082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026249885559082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016319751739502

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085687637329102

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085687637329102

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018100738525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018100738525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017919540405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027680397033691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080013275146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018100738525391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017919540405273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085999965667725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015671253204346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015671253204346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015671253204346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015671253204346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089716911315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015671253204346

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089716911315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061419010162354

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034849643707275

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034849643707275

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017919540405273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076508522033691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076508522033691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030560493469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037338733673096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037338733673096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054590702056885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005202054977417

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005202054977417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005202054977417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005202054977417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033998489379883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.021955013275146

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-19' and  '2021-11-19' and  billing_master.office_id= 1        
 Execution Time:0.0088839530944824

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-19' and  '2021-11-19' and  billing_master.office_id= 1        
 Execution Time:0.0088839530944824

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-19' and '2021-11-19' and  patient_registration.office_id= 1      
 Execution Time:0.0054340362548828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.033759117126465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0065429210662842

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.033759117126465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0065429210662842

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.033759117126465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0065429210662842

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0036270618438721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010962009429932

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010962009429932

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010962009429932

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0014560222625732

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028750896453857

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028750896453857

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039315223693848

select * from examination where examination_id= '15' and   office_id= '1' 
 Execution Time:0.0010180473327637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 15 
 Execution Time:0.0083539485931396

select * from examination_chargesdetails where  examination_id= '15' 
 Execution Time:0.0025711059570312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.0013201236724854

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.00056600570678711

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00049591064453125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023021697998047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023021697998047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049281120300293

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.001945972442627

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0022969245910645

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0090689659118652

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0020101070404053

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0062730312347412

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0062730312347412

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008537769317627

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.0040390491485596

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.0004730224609375

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00075912475585938

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.0040390491485596

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.0004730224609375

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00075912475585938

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0024769306182861

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.0040390491485596

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.0004730224609375

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00075912475585938

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0024769306182861

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011410713195801

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 48 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.0010550022125244

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.00038599967956543

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00052595138549805

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.0010550022125244

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.00038599967956543

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00052595138549805

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select * from examination where examination_id= '16' and   office_id= '1' 
 Execution Time:0.0010550022125244

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 16 
 Execution Time:0.00038599967956543

select * from examination_chargesdetails where  examination_id= '16' 
 Execution Time:0.00052595138549805

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00045514106750488

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044107437133789

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.018477916717529

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.018477916717529

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010152816772461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.018477916717529

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.010152816772461

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.006335973739624

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014011859893799

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014011859893799

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0014011859893799

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069189071655273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00075817108154297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00053095817565918

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00040507316589355

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00075817108154297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00053095817565918

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00040507316589355

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0006110668182373

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00075817108154297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00053095817565918

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00040507316589355

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0006110668182373

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00023722648620605

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084114074707031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084114074707031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0011260509490967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00059604644775391

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00056886672973633

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0011260509490967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00059604644775391

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00056886672973633

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0011260509490967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00059604644775391

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00056886672973633

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00056815147399902

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025606155395508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043978691101074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043978691101074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043978691101074

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0037569999694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0011160373687744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040709972381592

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0067780017852783

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0067780017852783

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0061030387878418

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0067741870880127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0077250003814697

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.007371187210083

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0067741870880127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0077250003814697

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.007371187210083

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0017499923706055

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0067741870880127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0077250003814697

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.007371187210083

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0017499923706055

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0037798881530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035631656646729

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035631656646729

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011260509490967

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0042190551757812

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0036828517913818

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0016350746154785

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0042190551757812

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0036828517913818

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0016350746154785

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0021860599517822

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0042190551757812

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0036828517913818

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0016350746154785

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0021860599517822

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0033290386199951

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0005340576171875

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0003960132598877

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0005340576171875

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0003960132598877

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0005340576171875

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.0003960132598877

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00030207633972168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011680126190186

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011680126190186

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046205520629883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0010311603546143

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00051212310791016

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00042486190795898

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0010311603546143

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00051212310791016

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00042486190795898

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0010311603546143

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00051212310791016

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00042486190795898

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00020813941955566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096487998962402

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096487998962402

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00051689147949219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00067901611328125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00023698806762695

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00021004676818848

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00067901611328125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00023698806762695

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00021004676818848

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025510787963867

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00067901611328125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00023698806762695

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00021004676818848

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025510787963867

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00060510635375977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002608060836792

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002608060836792

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00085687637329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0010790824890137

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00047492980957031

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00085687637329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0010790824890137

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00047492980957031

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00085687637329102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.0010790824890137

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00047492980957031

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011157989501953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011157989501953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.015712022781372

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028450489044189

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011157989501953

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.015712022781372

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0029120445251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0018799304962158

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00069093704223633

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00082588195800781

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0018799304962158

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00069093704223633

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00082588195800781

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0007011890411377

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0018799304962158

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00069093704223633

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00082588195800781

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0007011890411377

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099802017211914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099802017211914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0013799667358398

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.001086950302124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00090503692626953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00064897537231445

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00090503692626953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00064897537231445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.00090503692626953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00064897537231445

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0019040107727051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0010180473327637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001331090927124

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00055289268493652

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00035691261291504

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0010180473327637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001331090927124

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00055289268493652

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00035691261291504

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from examination where examination_id= '14' and   office_id= '1' 
 Execution Time:0.0010180473327637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001331090927124

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 14 
 Execution Time:0.00055289268493652

select * from examination_chargesdetails where  examination_id= '14' 
 Execution Time:0.00035691261291504

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00054407119750977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036649703979492

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036649703979492

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017709732055664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017709732055664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.015817165374756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017709732055664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.015817165374756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017709732055664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.015817165374756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039680004119873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017709732055664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.015817165374756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039680004119873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025098323822021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022101402282715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017709732055664

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.015817165374756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039680004119873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032100677490234

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032100677490234

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016770362854004

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007779598236084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011909008026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011909008026123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058913230895996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011909008026123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026538372039795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026538372039795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026538372039795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026538372039795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017790794372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026538372039795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017790794372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.011343002319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021569728851318

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026538372039795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016460418701172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017790794372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070905685424805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006258487701416

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0064818859100342

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0064818859100342

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0051858425140381

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0064818859100342

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0051858425140381

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.00047206878662109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 169 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0076351165771484

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0078909397125244

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0078909397125244

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078606605529785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078606605529785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070405006408691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055098533630371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046110153198242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046110153198242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00053787231445312

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045990943908691

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.00055193901062012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='157' and  doctors_registration.office_id= '1' 
 Execution Time:0.00076913833618164

select count(*) as cnt from patient_registration where  patient_registration_id= '157' and  office_id= '1' 
 Execution Time:0.00055193901062012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='157' and  doctors_registration.office_id= '1' 
 Execution Time:0.00076913833618164

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='157' and  office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053715705871582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053715705871582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037693977355957

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00015878677368164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012581348419189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010204315185547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010204315185547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010204315185547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012111663818359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013303756713867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010204315185547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0049610137939453

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0049610137939453

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054788589477539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054788589477539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011911392211914

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006711483001709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.00036811828613281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 169 
 Execution Time:0.00039196014404297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 159 
 Execution Time:0.00090289115905762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select * from examination where examination_id= '140' and   office_id= '1' 
 Execution Time:0.00091886520385742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 140 
 Execution Time:0.0030179023742676

select * from examination_chargesdetails where  examination_id= '140' 
 Execution Time:0.0023329257965088

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000579833984375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030090808868408

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030090808868408

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046610832214355

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029580593109131

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010600090026855

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010600090026855

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010600090026855

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 160 
 Execution Time:0.0006411075592041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 170 
 Execution Time:0.00062417984008789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012660026550293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081801414489746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081801414489746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002751350402832

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011169910430908

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011169910430908

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 161 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 171 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018398761749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018398761749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018398761749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018398761749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018398761749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084710121154785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018398761749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 163 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 173 
 Execution Time:0.00017905235290527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006248950958252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075078010559082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075078010559082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075078010559082

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 164 
 Execution Time:0.00050902366638184

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 175 
 Execution Time:0.00035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067019462585449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021991729736328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021991729736328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021991729736328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00039887428283691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 174 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069093704223633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00035190582275391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 174 
 Execution Time:0.00026082992553711

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 157 
 Execution Time:0.00062179565429688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034849643707275

select * from examination where examination_id= '145' and   office_id= '1' 
 Execution Time:0.0012519359588623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0048220157623291

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 145 
 Execution Time:0.0021481513977051

select * from examination_chargesdetails where  examination_id= '145' 
 Execution Time:0.0039839744567871

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0057830810546875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0057830810546875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037961006164551

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00073790550231934

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00073790550231934

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077104568481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00051283836364746

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00037598609924316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 174 
 Execution Time:0.00056099891662598

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 157 
 Execution Time:0.0010578632354736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from examination where examination_id= '145' and   office_id= '1' 
 Execution Time:0.0016911029815674

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 145 
 Execution Time:0.00028204917907715

select * from examination_chargesdetails where  examination_id= '145' 
 Execution Time:0.0017890930175781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067615509033203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.0002281665802002

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 174 
 Execution Time:0.00018405914306641

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 157 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select * from examination where examination_id= '145' and   office_id= '1' 
 Execution Time:0.0009458065032959

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 145 
 Execution Time:0.00032186508178711

select * from examination_chargesdetails where  examination_id= '145' 
 Execution Time:0.00020098686218262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067496299743652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067496299743652

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012819766998291

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002589225769043

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020599365234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071191787719727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 162 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 172 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057792663574219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022211074829102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023078918457031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041229724884033

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041229724884033

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019879341125488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043380260467529

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041229724884033

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0019879341125488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 163 
 Execution Time:0.0023889541625977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 173 
 Execution Time:0.0023260116577148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 163 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select * from examination where examination_id= '143' and   office_id= '1' 
 Execution Time:0.00090289115905762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088405609130859

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 143 
 Execution Time:0.00036096572875977

select * from examination_chargesdetails where  examination_id= '143' 
 Execution Time:0.00056695938110352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078797340393066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078797340393066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012991428375244

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0074658393859863

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00055289268493652

SELECT *
FROM `examination`
WHERE `examination_id` = 143 
 Execution Time:0.00098419189453125

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00028491020202637

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 163 
 Execution Time:0.00025820732116699

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00032496452331543

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=143 
 Execution Time:0.00041794776916504

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=143 
 Execution Time:0.00024294853210449

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=143 
 Execution Time:0.00023388862609863

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=143 
 Execution Time:0.00034713745117188

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='143' and office_id='1' 
 Execution Time:0.00038504600524902

select * from examination_chargesdetails where  examination_id= '143' 
 Execution Time:0.00023794174194336

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00052905082702637

SELECT *
FROM `examination`
WHERE `examination_id` = 143 
 Execution Time:0.00067806243896484

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0002598762512207

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00034308433532715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 163 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00071501731872559

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=143 
 Execution Time:0.00092506408691406

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=143 
 Execution Time:0.00060510635375977

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=143 
 Execution Time:0.00066304206848145

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=143 
 Execution Time:0.00057005882263184

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='143' and office_id='1' 
 Execution Time:0.00077295303344727

select * from examination_chargesdetails where  examination_id= '143' 
 Execution Time:0.00023698806762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 161 
 Execution Time:0.0002138614654541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 171 
 Execution Time:0.00029397010803223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 161 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select * from examination where examination_id= '142' and   office_id= '1' 
 Execution Time:0.00071620941162109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 142 
 Execution Time:0.00019502639770508

select * from examination_chargesdetails where  examination_id= '142' 
 Execution Time:0.00036311149597168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078392028808594

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 163 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 173 
 Execution Time:0.00023698806762695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 163 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select * from examination where examination_id= '143' and   office_id= '1' 
 Execution Time:0.0013968944549561

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 143 
 Execution Time:0.0004570484161377

select * from examination_chargesdetails where  examination_id= '143' 
 Execution Time:0.00053691864013672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062799453735352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00062799453735352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 160 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 170 
 Execution Time:0.00021791458129883

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 160 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011129379272461

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011129379272461

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098013877868652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039982795715332

select * from examination where examination_id= '141' and   office_id= '1' 
 Execution Time:0.00060510635375977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 141 
 Execution Time:0.00093197822570801

select * from examination_chargesdetails where  examination_id= '141' 
 Execution Time:0.00029993057250977

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070786476135254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 164 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 175 
 Execution Time:0.0001671314239502

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 164 
 Execution Time:0.00038886070251465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select * from examination where examination_id= '144' and   office_id= '1' 
 Execution Time:0.0009000301361084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 144 
 Execution Time:0.00043201446533203

select * from examination_chargesdetails where  examination_id= '144' 
 Execution Time:0.00026297569274902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063800811767578

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00086593627929688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00034880638122559

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 174 
 Execution Time:0.00030612945556641

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 157 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061893463134766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007481575012207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007481575012207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select * from examination where examination_id= '145' and   office_id= '1' 
 Execution Time:0.00091886520385742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 145 
 Execution Time:0.00022697448730469

select * from examination_chargesdetails where  examination_id= '145' 
 Execution Time:0.0002138614654541

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016608238220215

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053620338439941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 162 
 Execution Time:0.00050997734069824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 172 
 Execution Time:0.00041699409484863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 162 
 Execution Time:0.00099802017211914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select * from examination where examination_id= '146' and   office_id= '1' 
 Execution Time:0.00082683563232422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 146 
 Execution Time:0.00018000602722168

select * from examination_chargesdetails where  examination_id= '146' 
 Execution Time:0.00015401840209961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041913986206055

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082111358642578

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065112113952637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 164 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 175 
 Execution Time:0.00024104118347168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 164 
 Execution Time:0.00071597099304199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select * from examination where examination_id= '144' and   office_id= '1' 
 Execution Time:0.00096011161804199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 144 
 Execution Time:0.0001828670501709

select * from examination_chargesdetails where  examination_id= '144' 
 Execution Time:0.00020408630371094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033307075500488

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00034594535827637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00029587745666504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 174 
 Execution Time:0.00026202201843262

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 157 
 Execution Time:0.00066709518432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select * from examination where examination_id= '145' and   office_id= '1' 
 Execution Time:0.00090694427490234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 145 
 Execution Time:0.00055885314941406

select * from examination_chargesdetails where  examination_id= '145' 
 Execution Time:0.00041890144348145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005037784576416

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021631717681885

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021631717681885

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022971630096436

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035891532897949

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035891532897949

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027158260345459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003943920135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003943920135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003943920135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003943920135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080418586730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003943920135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080418586730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037500858306885

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003943920135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080418586730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055408477783203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055408477783203

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005948543548584

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005948543548584

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001406192779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001406192779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081515312194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001406192779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081515312194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001406192779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081515312194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001406192779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081515312194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001406192779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081515312194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066614151000977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0043060779571533

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001406192779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081515312194824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066614151000977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00024890899658203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 176 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075221061706543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064587593078613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064587593078613

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002936840057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002936840057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011229515075684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035786628723145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058484077453613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058484077453613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016798973083496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016798973083496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073480606079102

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007169246673584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016798973083496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025219917297363

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0025219917297363

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0039229393005371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035359859466553

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035359859466553

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038700103759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084590911865234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085210800170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016617774963379

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084590911865234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00095009803771973

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00095009803771973

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.007483959197998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012238025665283

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012238025665283

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0065710544586182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035829544067383

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032079219818115

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081801414489746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014209747314453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 161 
 Execution Time:0.00075197219848633

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 171 
 Execution Time:0.001093864440918

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 161 
 Execution Time:0.00082492828369141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select * from examination where examination_id= '142' and   office_id= '1' 
 Execution Time:0.0010662078857422

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 142 
 Execution Time:0.00095295906066895

select * from examination_chargesdetails where  examination_id= '142' 
 Execution Time:0.00059795379638672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086402893066406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086402893066406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063014030456543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00097322463989258

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0040419101715088

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.004141092300415

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.004141092300415

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0038378238677979

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 160 
 Execution Time:0.0039098262786865

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 170 
 Execution Time:0.00067305564880371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 160 
 Execution Time:0.0012381076812744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select * from examination where examination_id= '141' and   office_id= '1' 
 Execution Time:0.0010309219360352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022108554840088

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 141 
 Execution Time:0.0156569480896

select * from examination_chargesdetails where  examination_id= '141' 
 Execution Time:0.0037670135498047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001133918762207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0080668926239014

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0080668926239014

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.013609886169434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012049674987793

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012049674987793

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018279552459717

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046749114990234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044550895690918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046749114990234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044550895690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0076830387115479

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0046749114990234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0044550895690918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0076830387115479

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 161 
 Execution Time:0.0050029754638672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 171 
 Execution Time:0.0014269351959229

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 161 
 Execution Time:0.0055398941040039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.007997989654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031869411468506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031869411468506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031869411468506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031869411468506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031869411468506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036129951477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031869411468506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036129951477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030961036682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0046939849853516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027129650115967

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031869411468506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034430027008057

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042300224304199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036129951477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030961036682129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035150051116943

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.030106067657471

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.011343955993652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.011343955993652

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0047008991241455

select * from examination where examination_id= '142' and   office_id= '1' 
 Execution Time:0.0043158531188965

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0055251121520996

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 142 
 Execution Time:0.0011460781097412

select * from examination_chargesdetails where  examination_id= '142' 
 Execution Time:0.004011869430542

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040669441223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040669441223145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.017108917236328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035130977630615

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040669441223145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.017108917236328

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 163 
 Execution Time:0.0038180351257324

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 173 
 Execution Time:0.0013911724090576

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 163 
 Execution Time:0.009315013885498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0089049339294434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013899803161621

select * from examination where examination_id= '143' and   office_id= '1' 
 Execution Time:0.0064330101013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0104820728302

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 143 
 Execution Time:0.005706787109375

select * from examination_chargesdetails where  examination_id= '143' 
 Execution Time:0.0031490325927734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0040929317474365

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0040929317474365

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060009956359863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040371417999268

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0040371417999268

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024459362030029

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003079891204834

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003079891204834

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003079891204834

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018820762634277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 164 
 Execution Time:0.0022702217102051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 175 
 Execution Time:0.0058810710906982

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 164 
 Execution Time:0.003756046295166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019278526306152

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012288093566895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012288093566895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0026669502258301

select * from examination where examination_id= '144' and   office_id= '1' 
 Execution Time:0.0052800178527832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039339065551758

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 144 
 Execution Time:0.0024960041046143

select * from examination_chargesdetails where  examination_id= '144' 
 Execution Time:0.0015139579772949

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0049591064453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 174 
 Execution Time:0.00020503997802734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 157 
 Execution Time:0.00044512748718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from examination where examination_id= '145' and   office_id= '1' 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 145 
 Execution Time:0.00042605400085449

select * from examination_chargesdetails where  examination_id= '145' 
 Execution Time:0.00031614303588867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030441284179688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0030441284179688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055289268493652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023698806762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001878023147583

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018129348754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034999847412109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 172 
 Execution Time:0.00039196014404297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077104568481445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037441253662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040619373321533

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037441253662109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 161 
 Execution Time:0.0025379657745361

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 171 
 Execution Time:0.0035378932952881

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 161 
 Execution Time:0.0061471462249756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select * from examination where examination_id= '142' and   office_id= '1' 
 Execution Time:0.00085711479187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 142 
 Execution Time:0.00016999244689941

select * from examination_chargesdetails where  examination_id= '142' 
 Execution Time:0.00017809867858887

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032548904418945

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030150413513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030150413513184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039119720458984

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037968158721924

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030150413513184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039119720458984

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 166 
 Execution Time:0.0041470527648926

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 177 
 Execution Time:0.0028209686279297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012578964233398

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038681030273438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041100978851318

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038681030273438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041100978851318

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038681030273438

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041100978851318

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 171 
 Execution Time:0.003242015838623

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.0038549900054932

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038301944732666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015840530395508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 171 
 Execution Time:0.0040059089660645

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.0037410259246826

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001838207244873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017330646514893

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 165 
 Execution Time:0.00044417381286621

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 176 
 Execution Time:0.00039291381835938

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 165 
 Execution Time:0.0011758804321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select * from examination where examination_id= '147' and   office_id= '1' 
 Execution Time:0.0012209415435791

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 147 
 Execution Time:0.00071287155151367

select * from examination_chargesdetails where  examination_id= '147' 
 Execution Time:0.0011329650878906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011999607086182

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011999607086182

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012750625610352

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='81' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001399040222168

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 166 
 Execution Time:0.00058197975158691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 177 
 Execution Time:0.0004880428314209

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 166 
 Execution Time:0.00093412399291992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085806846618652

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00085806846618652

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063014030456543

select * from examination where examination_id= '148' and   office_id= '1' 
 Execution Time:0.0010280609130859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0065770149230957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 148 
 Execution Time:0.0014128684997559

select * from examination_chargesdetails where  examination_id= '148' 
 Execution Time:0.00037288665771484

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072288513183594

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063204765319824

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.015357971191406

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084209442138672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00083804130554199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 174 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.000946044921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 174 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.0002748966217041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 173 
 Execution Time:0.00024008750915527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 184 
 Execution Time:0.0001671314239502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 174 
 Execution Time:0.00043392181396484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00031495094299316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 174 
 Execution Time:0.00081706047058105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select * from examination where examination_id= '150' and   office_id= '1' 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 150 
 Execution Time:0.00022983551025391

select * from examination_chargesdetails where  examination_id= '150' 
 Execution Time:0.00019097328186035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055789947509766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055909156799316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055909156799316

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002748966217041

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053501129150391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00041818618774414

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00039410591125488

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064420700073242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011470317840576

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 166 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 177 
 Execution Time:0.0004119873046875

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 166 
 Execution Time:0.0011699199676514

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047588348388672

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047588348388672

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select * from examination where examination_id= '148' and   office_id= '1' 
 Execution Time:0.00092291831970215

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 148 
 Execution Time:0.0002291202545166

select * from examination_chargesdetails where  examination_id= '148' 
 Execution Time:0.00017595291137695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054597854614258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 175 
 Execution Time:0.00031805038452148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 186 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 170 
 Execution Time:0.00056600570678711

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 181 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063681602478027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 176 
 Execution Time:0.00025177001953125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 187 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061702728271484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076699256896973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 170 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 181 
 Execution Time:0.00050497055053711

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 170 
 Execution Time:0.00065088272094727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001823902130127

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001823902130127

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.000823974609375

select * from examination where examination_id= '153' and   office_id= '1' 
 Execution Time:0.00078201293945312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 153 
 Execution Time:0.00018405914306641

select * from examination_chargesdetails where  examination_id= '153' 
 Execution Time:0.00014090538024902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010390281677246

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00049591064453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018489360809326

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018489360809326

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0018489360809326

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 177 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 188 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056290626525879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 167 
 Execution Time:0.00022006034851074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 178 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 169 
 Execution Time:0.00024890899658203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 180 
 Execution Time:0.00016093254089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 172 
 Execution Time:0.00039315223693848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 168 
 Execution Time:0.00080299377441406

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00030112266540527

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046586990356445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 172 
 Execution Time:0.00030303001403809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.00019216537475586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046277046203613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 171 
 Execution Time:0.00028109550476074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.00017094612121582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 171 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select * from examination where examination_id= '149' and   office_id= '1' 
 Execution Time:0.0012531280517578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 149 
 Execution Time:0.0005040168762207

select * from examination_chargesdetails where  examination_id= '149' 
 Execution Time:0.0003359317779541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078988075256348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078988075256348

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010428428649902

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='62' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00099515914916992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 176 
 Execution Time:0.00033187866210938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 187 
 Execution Time:0.00029206275939941

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 176 
 Execution Time:0.00075101852416992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074601173400879

select * from examination where examination_id= '154' and   office_id= '1' 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 154 
 Execution Time:0.0002739429473877

select * from examination_chargesdetails where  examination_id= '154' 
 Execution Time:0.00040102005004883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 175 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 186 
 Execution Time:0.00052690505981445

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 175 
 Execution Time:0.0006098747253418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select * from examination where examination_id= '152' and   office_id= '1' 
 Execution Time:0.0010929107666016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 152 
 Execution Time:0.00021195411682129

select * from examination_chargesdetails where  examination_id= '152' 
 Execution Time:0.00018596649169922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 172 
 Execution Time:0.0021250247955322

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.00020313262939453

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 172 
 Execution Time:0.00059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057411193847656

select * from examination where examination_id= '159' and   office_id= '1' 
 Execution Time:0.00063419342041016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 159 
 Execution Time:0.00024700164794922

select * from examination_chargesdetails where  examination_id= '159' 
 Execution Time:0.00020813941955566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055623054504395

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054192543029785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 172 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.00026416778564453

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 172 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select * from examination where examination_id= '159' and   office_id= '1' 
 Execution Time:0.00071406364440918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 159 
 Execution Time:0.0006260871887207

select * from examination_chargesdetails where  examination_id= '159' 
 Execution Time:0.00041103363037109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030684471130371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074100494384766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 169 
 Execution Time:0.00059604644775391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 180 
 Execution Time:0.0003969669342041

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 169 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select * from examination where examination_id= '157' and   office_id= '1' 
 Execution Time:0.00082993507385254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090193748474121

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 157 
 Execution Time:0.00050091743469238

select * from examination_chargesdetails where  examination_id= '157' 
 Execution Time:0.003277063369751

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068211555480957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 169 
 Execution Time:0.00036787986755371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 180 
 Execution Time:0.00028204917907715

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 169 
 Execution Time:0.0007631778717041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from examination where examination_id= '157' and   office_id= '1' 
 Execution Time:0.0010688304901123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044431686401367

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 157 
 Execution Time:0.0077950954437256

select * from examination_chargesdetails where  examination_id= '157' 
 Execution Time:0.00071597099304199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067901611328125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 167 
 Execution Time:0.00024318695068359

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 178 
 Execution Time:0.00018501281738281

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 167 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from examination where examination_id= '156' and   office_id= '1' 
 Execution Time:0.00056600570678711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 156 
 Execution Time:0.0001828670501709

select * from examination_chargesdetails where  examination_id= '156' 
 Execution Time:0.00012397766113281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013358592987061

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013358592987061

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022280216217041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 173 
 Execution Time:0.00052595138549805

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 184 
 Execution Time:0.00030684471130371

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 173 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select * from examination where examination_id= '151' and   office_id= '1' 
 Execution Time:0.00073695182800293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 151 
 Execution Time:0.00020003318786621

select * from examination_chargesdetails where  examination_id= '151' 
 Execution Time:0.00012898445129395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='18' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073981285095215

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='73' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 175 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 186 
 Execution Time:0.00080704689025879

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 175 
 Execution Time:0.00074195861816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select * from examination where examination_id= '152' and   office_id= '1' 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 152 
 Execution Time:0.00048995018005371

select * from examination_chargesdetails where  examination_id= '152' 
 Execution Time:0.0013020038604736

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044918060302734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001121997833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001121997833252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010061264038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011818408966064

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001162052154541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001121997833252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0066912174224854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0066912174224854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040817260742188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0066912174224854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034730434417725

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042390823364258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00065708160400391

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00065708160400391

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071406364440918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071406364440918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066018104553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066018104553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041484832763672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066018104553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010631084442139

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052094459533691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010921955108643

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029070377349854

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031120777130127

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010559558868408

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010559558868408

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069999694824219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069999694824219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081706047058105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081706047058105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0052728652954102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0052728652954102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0073370933532715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0052728652954102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0073370933532715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.0032908916473389

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 191 
 Execution Time:0.0063648223876953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032639503479004

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001741886138916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 182 
 Execution Time:0.00066590309143066

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 193 
 Execution Time:0.0013418197631836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072193145751953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 177 
 Execution Time:0.0007319450378418

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 188 
 Execution Time:0.00026607513427734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 177 
 Execution Time:0.00075483322143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015890598297119

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015890598297119

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049781799316406

select * from examination where examination_id= '155' and   office_id= '1' 
 Execution Time:0.00057792663574219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 155 
 Execution Time:0.00091290473937988

select * from examination_chargesdetails where  examination_id= '155' 
 Execution Time:0.00072503089904785

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014739036560059

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 176 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 187 
 Execution Time:0.00031805038452148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 176 
 Execution Time:0.00089001655578613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072383880615234

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072383880615234

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select * from examination where examination_id= '154' and   office_id= '1' 
 Execution Time:0.0011420249938965

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 154 
 Execution Time:0.00033307075500488

select * from examination_chargesdetails where  examination_id= '154' 
 Execution Time:0.00029683113098145

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0052299499511719

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00041985511779785

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00075793266296387

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00075793266296387

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00099921226501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056099891662598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 181 
 Execution Time:0.00055384635925293

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 192 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006248950958252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 178 
 Execution Time:0.0006721019744873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 189 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 179 
 Execution Time:0.00067496299743652

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 190 
 Execution Time:0.0018129348754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089192390441895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.00036787986755371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 194 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032877922058105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094389915466309

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00094389915466309

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029420852661133

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066089630126953

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066089630126953

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018501281738281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029458999633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001471996307373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018470287322998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003507137298584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081110000610352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029458999633789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.0004270076751709

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 195 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063109397888184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087118148803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087118148803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087118148803711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 181 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 192 
 Execution Time:0.00020885467529297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 181 
 Execution Time:0.00077414512634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select * from examination where examination_id= '162' and   office_id= '1' 
 Execution Time:0.0010268688201904

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 162 
 Execution Time:0.0023548603057861

select * from examination_chargesdetails where  examination_id= '162' 
 Execution Time:0.0010001659393311

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070285797119141

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019478797912598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019478797912598

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015771389007568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012640953063965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012640953063965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012640953063965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012640953063965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011231899261475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012640953063965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011231899261475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034558773040771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001392126083374

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012221336364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010538101196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012640953063965

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011231899261475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0066330432891846

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070810317993164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 182 
 Execution Time:0.00046586990356445

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 193 
 Execution Time:0.00027799606323242

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 182 
 Execution Time:0.00093507766723633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select * from examination where examination_id= '161' and   office_id= '1' 
 Execution Time:0.00073504447937012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020599365234375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 161 
 Execution Time:0.00036406517028809

select * from examination_chargesdetails where  examination_id= '161' 
 Execution Time:0.00038599967956543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053787231445312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056290626525879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064897537231445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00096797943115234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 181 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 192 
 Execution Time:0.00023603439331055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 181 
 Execution Time:0.000762939453125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030016899108887

select * from examination where examination_id= '162' and   office_id= '1' 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 162 
 Execution Time:0.00018501281738281

select * from examination_chargesdetails where  examination_id= '162' 
 Execution Time:0.00037908554077148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014128684997559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014128684997559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040912628173828

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079584121704102

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00089716911315918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 183 
 Execution Time:0.0006258487701416

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 194 
 Execution Time:0.00022411346435547

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 183 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018978118896484

select * from examination where examination_id= '165' and   office_id= '1' 
 Execution Time:0.00097203254699707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 165 
 Execution Time:0.00025010108947754

select * from examination_chargesdetails where  examination_id= '165' 
 Execution Time:0.00018215179443359

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074291229248047

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074291229248047

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048518180847168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00076603889465332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021848678588867

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021848678588867

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021848678588867

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 179 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 190 
 Execution Time:0.00028514862060547

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 179 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028700828552246

select * from examination where examination_id= '164' and   office_id= '1' 
 Execution Time:0.00093293190002441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 164 
 Execution Time:0.00040197372436523

select * from examination_chargesdetails where  examination_id= '164' 
 Execution Time:0.0033619403839111

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006709098815918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006709098815918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012450218200684

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056290626525879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00049901008605957

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.004263162612915

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select count(*) as cnt from medicine where  name = 'lubrex  ds' and office_id= '1' 
 Execution Time:0.00048589706420898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 179 
 Execution Time:0.00021910667419434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 190 
 Execution Time:0.00015807151794434

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 179 
 Execution Time:0.00054216384887695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select * from examination where examination_id= '164' and   office_id= '1' 
 Execution Time:0.0026509761810303

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 164 
 Execution Time:0.00061988830566406

select * from examination_chargesdetails where  examination_id= '164' 
 Execution Time:0.0011920928955078

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055694580078125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038909912109375

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0008080005645752

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005490779876709

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='90' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00038909912109375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 195 
 Execution Time:0.00033402442932129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 184 
 Execution Time:0.00060677528381348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select * from examination where examination_id= '166' and   office_id= '1' 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 166 
 Execution Time:0.00080299377441406

select * from examination_chargesdetails where  examination_id= '166' 
 Execution Time:0.00026702880859375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000701904296875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011229515075684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012168884277344

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 168 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 179 
 Execution Time:0.00037407875061035

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 168 
 Execution Time:0.00063419342041016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012350082397461

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012350082397461

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014419555664062

select * from examination where examination_id= '158' and   office_id= '1' 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 158 
 Execution Time:0.0010321140289307

select * from examination_chargesdetails where  examination_id= '158' 
 Execution Time:0.00083518028259277

SELECT *
FROM `examination`
WHERE `examination_id` = 158 
 Execution Time:0.00049304962158203

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029897689819336

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00031709671020508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 168 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 3 
 Execution Time:0.0010669231414795

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=158 
 Execution Time:0.00066184997558594

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=158 
 Execution Time:0.00040411949157715

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=158 
 Execution Time:0.00028610229492188

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=158 
 Execution Time:0.00014686584472656

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='158' and office_id='1' 
 Execution Time:0.0004119873046875

select * from examination_chargesdetails where  examination_id= '158' 
 Execution Time:0.00010180473327637


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022280216217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022280216217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022280216217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022280216217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025157928466797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022280216217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025157928466797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024130344390869

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002202033996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002094030380249

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022280216217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025157928466797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050115585327148

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00018787384033203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095582008361816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095582008361816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095582008361816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050878524780273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0056388378143311

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050878524780273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0056388378143311

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050878524780273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0056388378143311

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 306 
 Execution Time:0.0067532062530518

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 328 
 Execution Time:0.00028014183044434

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 328  and `patient_registration_id` = 306 
 Execution Time:0.0021510124206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022618770599365

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0022618770599365

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060415267944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 306 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 328 
 Execution Time:0.00036501884460449

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 328  and `patient_registration_id` = 306 
 Execution Time:0.00043511390686035

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 306 
 Execution Time:0.00093603134155273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029678344726562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029678344726562

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004420280456543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034284591674805

select * from examination where examination_id= '281' and   office_id= '1' 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 281 
 Execution Time:0.0044469833374023

select * from examination_chargesdetails where  examination_id= '281' 
 Execution Time:0.0029838085174561

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0019690990447998

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0019690990447998

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00084805488586426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 306 
 Execution Time:0.00031113624572754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 328 
 Execution Time:0.00025105476379395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 328  and `patient_registration_id` = 306 
 Execution Time:0.00042295455932617

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 306 
 Execution Time:0.00087785720825195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031518936157227

select * from examination where examination_id= '281' and   office_id= '1' 
 Execution Time:0.00056791305541992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 281 
 Execution Time:0.00023102760314941

select * from examination_chargesdetails where  examination_id= '281' 
 Execution Time:0.00019693374633789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046396255493164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046396255493164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053191184997559

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0031938552856445

select count(*) as cnt from patient_registration where  patient_registration_id= '301' and  office_id= '1' 
 Execution Time:0.00026178359985352

select count(*) as cnt from patient_registration where  patient_registration_id= '301' and  office_id= '1' 
 Execution Time:0.00026178359985352

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=301  
 Execution Time:0.0017738342285156

select count(*) as cnt from patient_registration where  patient_registration_id= '301' and  office_id= '1' 
 Execution Time:0.00026178359985352

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=301  
 Execution Time:0.0017738342285156

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=301  
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_registration where  patient_registration_id= '301' and  office_id= '1' 
 Execution Time:0.00026178359985352

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=301  
 Execution Time:0.0017738342285156

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=301  
 Execution Time:0.00035691261291504

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='301' and  office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063991546630859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0042040348052979

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='87' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00050210952758789

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00026488304138184

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=302  
 Execution Time:0.0018739700317383

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00026488304138184

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=302  
 Execution Time:0.0018739700317383

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=302  
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00026488304138184

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=302  
 Execution Time:0.0018739700317383

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=302  
 Execution Time:0.00061297416687012

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='302' and  office_id= '1' 
 Execution Time:0.00016593933105469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040912628173828

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0001828670501709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 301 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 330 
 Execution Time:0.0002439022064209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 330  and `patient_registration_id` = 301 
 Execution Time:0.00039315223693848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064206123352051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064206123352051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046396255493164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049614906311035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081610679626465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081610679626465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010929107666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010929107666016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010929107666016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00036096572875977

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=302  
 Execution Time:0.001255989074707

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00036096572875977

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=302  
 Execution Time:0.001255989074707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=302  
 Execution Time:0.00034213066101074

select count(*) as cnt from patient_registration where  patient_registration_id= '302' and  office_id= '1' 
 Execution Time:0.00036096572875977

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=302  
 Execution Time:0.001255989074707

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=302  
 Execution Time:0.00034213066101074

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='302' and  office_id= '1' 
 Execution Time:0.00017881393432617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086593627929688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086593627929688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038409233093262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012321472167969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012321472167969

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '303' and  office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from patient_registration where  patient_registration_id= '303' and  office_id= '1' 
 Execution Time:0.00032687187194824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=303  
 Execution Time:0.0030338764190674

select count(*) as cnt from patient_registration where  patient_registration_id= '303' and  office_id= '1' 
 Execution Time:0.00032687187194824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=303  
 Execution Time:0.0030338764190674

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=303  
 Execution Time:0.00064992904663086

select count(*) as cnt from patient_registration where  patient_registration_id= '303' and  office_id= '1' 
 Execution Time:0.00032687187194824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=303  
 Execution Time:0.0030338764190674

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=303  
 Execution Time:0.00064992904663086

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='303' and  office_id= '1' 
 Execution Time:0.00029277801513672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084304809570312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042390823364258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023913383483887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045394897460938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 308 
 Execution Time:0.00030684471130371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 331 
 Execution Time:0.0002589225769043

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 331  and `patient_registration_id` = 308 
 Execution Time:0.00074481964111328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070786476135254

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070786476135254

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from patient_registration where  patient_registration_id= '304' and  office_id= '1' 
 Execution Time:0.00042319297790527

select count(*) as cnt from patient_registration where  patient_registration_id= '304' and  office_id= '1' 
 Execution Time:0.00042319297790527

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=304  
 Execution Time:0.0020780563354492

select count(*) as cnt from patient_registration where  patient_registration_id= '304' and  office_id= '1' 
 Execution Time:0.00042319297790527

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=304  
 Execution Time:0.0020780563354492

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=304  
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_registration where  patient_registration_id= '304' and  office_id= '1' 
 Execution Time:0.00042319297790527

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=304  
 Execution Time:0.0020780563354492

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=304  
 Execution Time:0.00049805641174316

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='304' and  office_id= '1' 
 Execution Time:0.00020313262939453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040483474731445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 302 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 333 
 Execution Time:0.00016689300537109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 333  and `patient_registration_id` = 302 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053215026855469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053215026855469

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016498565673828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00055694580078125

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00060892105102539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023729801177979

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023729801177979

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 303 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 335 
 Execution Time:0.00027894973754883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 335  and `patient_registration_id` = 303 
 Execution Time:0.00020718574523926

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052785873413086

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052785873413086

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006401538848877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006401538848877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066018104553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005500316619873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006258487701416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039818286895752

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039818286895752

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052881240844727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083112716674805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045609474182129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045609474182129

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044083595275879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044083595275879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031185150146484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 310 
 Execution Time:0.00021791458129883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 334 
 Execution Time:0.00014781951904297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 334  and `patient_registration_id` = 310 
 Execution Time:0.00015115737915039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010800361633301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 310 
 Execution Time:0.0017619132995605

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 334 
 Execution Time:0.00076603889465332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 334  and `patient_registration_id` = 310 
 Execution Time:0.0034699440002441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017518997192383

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0017518997192383

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039780139923096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059828758239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059828758239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059828758239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059828758239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059828758239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011990070343018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013859272003174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059828758239746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039815902709961

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 309 
 Execution Time:0.000244140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 332 
 Execution Time:0.00025701522827148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 332  and `patient_registration_id` = 309 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055313110351562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055313110351562

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 311 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 336 
 Execution Time:0.00017309188842773

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 336  and `patient_registration_id` = 311 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035200119018555

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0035200119018555

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0034098625183105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062799453735352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043416023254395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043416023254395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043416023254395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043416023254395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043416023254395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043892860412598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 314 
 Execution Time:0.00049495697021484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 340 
 Execution Time:0.0003821849822998

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 340  and `patient_registration_id` = 314 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020408630371094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 302 
 Execution Time:0.00020408630371094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 333 
 Execution Time:0.00016880035400391

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 333  and `patient_registration_id` = 302 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 302 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011589527130127

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011589527130127

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select * from examination where examination_id= '284' and   office_id= '1' 
 Execution Time:0.00060391426086426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 284 
 Execution Time:0.0003960132598877

select * from examination_chargesdetails where  examination_id= '284' 
 Execution Time:0.00042891502380371

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00038886070251465

SELECT *
FROM `examination`
WHERE `examination_id` = 284 
 Execution Time:0.00059795379638672

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00018501281738281

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00015902519226074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 302 
 Execution Time:0.00015401840209961

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00014591217041016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=284 
 Execution Time:0.00071501731872559

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=284 
 Execution Time:0.00040006637573242

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=284 
 Execution Time:0.0007469654083252

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=284 
 Execution Time:0.00042390823364258

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='284' and office_id='1' 
 Execution Time:0.00054788589477539

select * from examination_chargesdetails where  examination_id= '284' 
 Execution Time:0.00035691261291504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 312 
 Execution Time:0.00026607513427734

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 338 
 Execution Time:0.00026512145996094

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 338  and `patient_registration_id` = 312 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 312 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 338 
 Execution Time:0.00017309188842773

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 338  and `patient_registration_id` = 312 
 Execution Time:0.00047516822814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082707405090332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082707405090332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 307 
 Execution Time:0.00051093101501465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 329 
 Execution Time:0.00076389312744141

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 329  and `patient_registration_id` = 307 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082588195800781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082588195800781

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00060701370239258

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00020098686218262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083398818969727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083398818969727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088596343994141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009009838104248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017619132995605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088596343994141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 302 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 333 
 Execution Time:0.00020098686218262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 333  and `patient_registration_id` = 302 
 Execution Time:0.00049400329589844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 302 
 Execution Time:0.00095987319946289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select * from examination where examination_id= '284' and   office_id= '1' 
 Execution Time:0.00075006484985352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 284 
 Execution Time:0.00035190582275391

select * from examination_chargesdetails where  examination_id= '284' 
 Execution Time:0.00039410591125488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050520896911621

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014879703521729

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 302 
 Execution Time:0.00025010108947754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 333 
 Execution Time:0.00020408630371094

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 333  and `patient_registration_id` = 302 
 Execution Time:0.00016093254089355

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 302 
 Execution Time:0.00056600570678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select * from examination where examination_id= '284' and   office_id= '1' 
 Execution Time:0.00061917304992676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 284 
 Execution Time:0.00083398818969727

select * from examination_chargesdetails where  examination_id= '284' 
 Execution Time:0.00034904479980469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033283233642578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030207633972168

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016388893127441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 301 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 330 
 Execution Time:0.00019407272338867

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 330  and `patient_registration_id` = 301 
 Execution Time:0.00013899803161621

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 301 
 Execution Time:0.00067591667175293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057697296142578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026583671569824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029206275939941

select * from examination where examination_id= '282' and   office_id= '1' 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010948181152344

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 282 
 Execution Time:0.00038313865661621

select * from examination_chargesdetails where  examination_id= '282' 
 Execution Time:0.00029110908508301

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082278251647949

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 303 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 335 
 Execution Time:0.0002741813659668

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 335  and `patient_registration_id` = 303 
 Execution Time:0.00043916702270508

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 303 
 Execution Time:0.00097203254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select * from examination where examination_id= '285' and   office_id= '1' 
 Execution Time:0.00061607360839844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079512596130371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 285 
 Execution Time:0.00015115737915039

select * from examination_chargesdetails where  examination_id= '285' 
 Execution Time:0.00017094612121582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007789134979248

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007789134979248

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071120262145996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071120262145996

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073003768920898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012111663818359

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012111663818359

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012111663818359

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 313 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 339 
 Execution Time:0.00018405914306641

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 339  and `patient_registration_id` = 313 
 Execution Time:0.00015711784362793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 308 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 331 
 Execution Time:0.00017786026000977

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 331  and `patient_registration_id` = 308 
 Execution Time:0.00026392936706543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 308 
 Execution Time:0.00067400932312012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070786476135254

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070786476135254

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036191940307617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051593780517578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051593780517578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048494338989258

select * from examination where examination_id= '283' and   office_id= '1' 
 Execution Time:0.00087308883666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 283 
 Execution Time:0.00040006637573242

select * from examination_chargesdetails where  examination_id= '283' 
 Execution Time:0.0027129650115967

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='14' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060296058654785

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005490779876709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 304 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 337 
 Execution Time:0.00020885467529297

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 337  and `patient_registration_id` = 304 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 304 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 337 
 Execution Time:0.00025105476379395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 337  and `patient_registration_id` = 304 
 Execution Time:0.00049114227294922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052213668823242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052213668823242

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002591609954834

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00059890747070312

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00028681755065918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063681602478027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063681602478027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014688968658447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 315 
 Execution Time:0.00025200843811035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 341 
 Execution Time:0.0002439022064209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 341  and `patient_registration_id` = 315 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 312 
 Execution Time:0.00044512748718262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 338 
 Execution Time:0.00058507919311523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 338  and `patient_registration_id` = 312 
 Execution Time:0.00039792060852051

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 312 
 Execution Time:0.0011398792266846

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select * from examination where examination_id= '290' and   office_id= '1' 
 Execution Time:0.0012061595916748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 290 
 Execution Time:0.00032591819763184

select * from examination_chargesdetails where  examination_id= '290' 
 Execution Time:0.00034904479980469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039100646972656

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022292137145996

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070714950561523

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='87' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097107887268066

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077104568481445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00096893310546875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 316 
 Execution Time:0.00058603286743164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 342 
 Execution Time:0.00060701370239258

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 342  and `patient_registration_id` = 316 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 316 
 Execution Time:0.00026583671569824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 342 
 Execution Time:0.00022006034851074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 342  and `patient_registration_id` = 316 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077581405639648

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077581405639648

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 307 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 329 
 Execution Time:0.00015997886657715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 329  and `patient_registration_id` = 307 
 Execution Time:0.00023603439331055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 307 
 Execution Time:0.00098586082458496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select * from examination where examination_id= '291' and   office_id= '1' 
 Execution Time:0.00086688995361328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 291 
 Execution Time:0.00038290023803711

select * from examination_chargesdetails where  examination_id= '291' 
 Execution Time:0.00040793418884277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006401538848877

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006401538848877

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058484077453613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058484077453613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064277648925781

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087189674377441

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 317 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 343 
 Execution Time:0.00031781196594238

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 343  and `patient_registration_id` = 317 
 Execution Time:0.00025415420532227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072097778320312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 313 
 Execution Time:0.00046896934509277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 339 
 Execution Time:0.00032401084899902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 339  and `patient_registration_id` = 313 
 Execution Time:0.00024795532226562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 313 
 Execution Time:0.0010268688201904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select * from examination where examination_id= '292' and   office_id= '1' 
 Execution Time:0.001025915145874

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 292 
 Execution Time:0.00036406517028809

select * from examination_chargesdetails where  examination_id= '292' 
 Execution Time:0.00033402442932129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008089542388916

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008089542388916

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 310 
 Execution Time:0.00021696090698242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 334 
 Execution Time:0.00019407272338867

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 334  and `patient_registration_id` = 310 
 Execution Time:0.00019192695617676

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 310 
 Execution Time:0.0005800724029541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038313865661621

select * from examination where examination_id= '286' and   office_id= '1' 
 Execution Time:0.00082802772521973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 286 
 Execution Time:0.0001678466796875

select * from examination_chargesdetails where  examination_id= '286' 
 Execution Time:0.00021100044250488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060606002807617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060606002807617

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 319 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 345 
 Execution Time:0.00022101402282715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 345  and `patient_registration_id` = 319 
 Execution Time:0.00014495849609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 319 
 Execution Time:0.000244140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 345 
 Execution Time:0.00018000602722168

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 345  and `patient_registration_id` = 319 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063586235046387

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063586235046387

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 318 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 344 
 Execution Time:0.00025296211242676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 344  and `patient_registration_id` = 318 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051617622375488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051617622375488

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00018978118896484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 309 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 332 
 Execution Time:0.0003199577331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 332  and `patient_registration_id` = 309 
 Execution Time:0.00061988830566406

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 309 
 Execution Time:0.0013241767883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select * from examination where examination_id= '287' and   office_id= '1' 
 Execution Time:0.0011000633239746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037109851837158

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 287 
 Execution Time:0.0031909942626953

select * from examination_chargesdetails where  examination_id= '287' 
 Execution Time:0.0037961006164551

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001121997833252

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001121997833252

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057077407836914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057077407836914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00039505958557129

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.0035901069641113

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00039505958557129

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.0035901069641113

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=320  
 Execution Time:0.0041079521179199

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00039505958557129

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.0035901069641113

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=320  
 Execution Time:0.0041079521179199

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='320' and  office_id= '1' 
 Execution Time:0.0012650489807129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 320 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 346 
 Execution Time:0.0001990795135498

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 346  and `patient_registration_id` = 320 
 Execution Time:0.00016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024509429931641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028061866760254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028061866760254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028061866760254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028061866760254

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.0004880428314209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.0031030178070068

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.0004880428314209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.0031030178070068

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=320  
 Execution Time:0.00076389312744141

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.0004880428314209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.0031030178070068

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=320  
 Execution Time:0.00076389312744141

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='320' and  office_id= '1' 
 Execution Time:0.00024008750915527

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071597099304199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071597099304199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032186508178711

select * from investigation where  investigation_id=21  and office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010690689086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026321411132812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014500617980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010988712310791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074076652526855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042605400085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097012519836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014500617980957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 314 
 Execution Time:0.00025796890258789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 340 
 Execution Time:0.00019598007202148

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 340  and `patient_registration_id` = 314 
 Execution Time:0.00030207633972168

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 314 
 Execution Time:0.0007939338684082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select * from examination where examination_id= '289' and   office_id= '1' 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 289 
 Execution Time:0.00057101249694824

select * from examination_chargesdetails where  examination_id= '289' 
 Execution Time:0.00037217140197754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078320503234863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078320503234863

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035619735717773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089287757873535

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010969638824463

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 316 
 Execution Time:0.00053310394287109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 342 
 Execution Time:0.00039505958557129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 342  and `patient_registration_id` = 316 
 Execution Time:0.00059700012207031

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 316 
 Execution Time:0.00091886520385742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select * from examination where examination_id= '295' and   office_id= '1' 
 Execution Time:0.0009310245513916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 295 
 Execution Time:0.00040912628173828

select * from examination_chargesdetails where  examination_id= '295' 
 Execution Time:0.00030279159545898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029492378234863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 311 
 Execution Time:0.00043487548828125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 336 
 Execution Time:0.00037789344787598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 336  and `patient_registration_id` = 311 
 Execution Time:0.00028419494628906

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 311 
 Execution Time:0.0010559558868408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select * from examination where examination_id= '288' and   office_id= '1' 
 Execution Time:0.0029950141906738

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036921501159668

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 288 
 Execution Time:0.0039350986480713

select * from examination_chargesdetails where  examination_id= '288' 
 Execution Time:0.0039420127868652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088381767272949

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088381767272949

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007469654083252

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0042698383331299

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055718421936035

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00045609474182129

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00076484680175781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 317 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 343 
 Execution Time:0.00029802322387695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 343  and `patient_registration_id` = 317 
 Execution Time:0.00023412704467773

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 317 
 Execution Time:0.00071811676025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052905082702637

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028204917907715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012338161468506

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012338161468506

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select * from examination where examination_id= '296' and   office_id= '1' 
 Execution Time:0.0024509429931641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 296 
 Execution Time:0.0002439022064209

select * from examination_chargesdetails where  examination_id= '296' 
 Execution Time:0.00023794174194336

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011639595031738

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063300132751465

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 315 
 Execution Time:0.0019388198852539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 341 
 Execution Time:0.0035648345947266

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 341  and `patient_registration_id` = 315 
 Execution Time:0.00050187110900879

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 315 
 Execution Time:0.0012211799621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select * from examination where examination_id= '294' and   office_id= '1' 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 294 
 Execution Time:0.00016498565673828

select * from examination_chargesdetails where  examination_id= '294' 
 Execution Time:0.00013995170593262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053215026855469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067782402038574

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067782402038574

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 304 
 Execution Time:0.00035285949707031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 337 
 Execution Time:0.00025677680969238

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 337  and `patient_registration_id` = 304 
 Execution Time:0.00039196014404297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 304 
 Execution Time:0.0011780261993408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014877319335938

select * from examination where examination_id= '293' and   office_id= '1' 
 Execution Time:0.00094199180603027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083422660827637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 293 
 Execution Time:0.00025010108947754

select * from examination_chargesdetails where  examination_id= '293' 
 Execution Time:0.00018095970153809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024220943450928

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024220943450928

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036382675170898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010340213775635

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016210079193115

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016210079193115

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016210079193115

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013980865478516

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 320 
 Execution Time:0.00048494338989258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 346 
 Execution Time:0.00059604644775391

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 346  and `patient_registration_id` = 320 
 Execution Time:0.0018069744110107

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 320 
 Execution Time:0.00089478492736816

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select * from examination where examination_id= '299' and   office_id= '1' 
 Execution Time:0.00084900856018066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017561912536621

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 299 
 Execution Time:0.0014622211456299

select * from examination_chargesdetails where  examination_id= '299' 
 Execution Time:0.0011658668518066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014410018920898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014410018920898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038290023803711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021741390228271

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021741390228271

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001248836517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001248836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001248836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001248836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013821125030518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001248836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013821125030518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016589164733887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001248836517334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010201930999756

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013821125030518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001201868057251

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013089179992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013089179992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013089179992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013089179992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-06' and  '2022-03-06' and  billing_master.office_id= 1        
 Execution Time:0.0014829635620117

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-06' and  '2022-03-06' and  billing_master.office_id= 1        
 Execution Time:0.0014829635620117

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
		where billing=0 and appointment_date between  '2022-03-06' and '2022-03-06' and  patient_registration.office_id= 1      
 Execution Time:0.0030741691589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095987319946289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095987319946289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00050997734069824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=4  
 Execution Time:0.002263069152832

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00050997734069824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=4  
 Execution Time:0.002263069152832

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=4  
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00050997734069824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=4  
 Execution Time:0.002263069152832

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=4  
 Execution Time:0.00051999092102051

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00049996376037598

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=15  
 Execution Time:0.0024909973144531

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00049996376037598

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=15  
 Execution Time:0.0024909973144531

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=15  
 Execution Time:0.0010850429534912

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00049996376037598

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=15  
 Execution Time:0.0024909973144531

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=15  
 Execution Time:0.0010850429534912

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='15' and  office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00097489356994629

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00097489356994629

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.003432035446167

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00097489356994629

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.003432035446167

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=320  
 Execution Time:0.001284122467041

select count(*) as cnt from patient_registration where  patient_registration_id= '320' and  office_id= '1' 
 Execution Time:0.00097489356994629

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=320  
 Execution Time:0.003432035446167

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=320  
 Execution Time:0.001284122467041

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='320' and  office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from patient_registration where  patient_registration_id= '319' and  office_id= '1' 
 Execution Time:0.00091385841369629

select count(*) as cnt from patient_registration where  patient_registration_id= '319' and  office_id= '1' 
 Execution Time:0.00091385841369629

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=319  
 Execution Time:0.0024008750915527

select count(*) as cnt from patient_registration where  patient_registration_id= '319' and  office_id= '1' 
 Execution Time:0.00091385841369629

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=319  
 Execution Time:0.0024008750915527

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=319  
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_registration where  patient_registration_id= '319' and  office_id= '1' 
 Execution Time:0.00091385841369629

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=319  
 Execution Time:0.0024008750915527

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=319  
 Execution Time:0.00071597099304199

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='319' and  office_id= '1' 
 Execution Time:0.00018715858459473

select count(*) as cnt from patient_registration where  patient_registration_id= '318' and  office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_registration where  patient_registration_id= '318' and  office_id= '1' 
 Execution Time:0.00071597099304199

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=318  
 Execution Time:0.0038650035858154

select count(*) as cnt from patient_registration where  patient_registration_id= '318' and  office_id= '1' 
 Execution Time:0.00071597099304199

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=318  
 Execution Time:0.0038650035858154

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=318  
 Execution Time:0.0011730194091797

select count(*) as cnt from patient_registration where  patient_registration_id= '318' and  office_id= '1' 
 Execution Time:0.00071597099304199

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=318  
 Execution Time:0.0038650035858154

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=318  
 Execution Time:0.0011730194091797

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='318' and  office_id= '1' 
 Execution Time:0.00031113624572754

select count(*) as cnt from patient_registration where  patient_registration_id= '317' and  office_id= '1' 
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_registration where  patient_registration_id= '317' and  office_id= '1' 
 Execution Time:0.00055098533630371

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=317  
 Execution Time:0.0025501251220703

select count(*) as cnt from patient_registration where  patient_registration_id= '317' and  office_id= '1' 
 Execution Time:0.00055098533630371

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=317  
 Execution Time:0.0025501251220703

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=317  
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_registration where  patient_registration_id= '317' and  office_id= '1' 
 Execution Time:0.00055098533630371

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=317  
 Execution Time:0.0025501251220703

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=317  
 Execution Time:0.00053501129150391

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='317' and  office_id= '1' 
 Execution Time:0.00017094612121582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 318 
 Execution Time:0.0005040168762207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 344 
 Execution Time:0.00047898292541504

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 344  and `patient_registration_id` = 318 
 Execution Time:0.0006101131439209

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 318 
 Execution Time:0.0010318756103516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select * from examination where examination_id= '297' and   office_id= '1' 
 Execution Time:0.0011239051818848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 297 
 Execution Time:0.0006718635559082

select * from examination_chargesdetails where  examination_id= '297' 
 Execution Time:0.00065517425537109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071597099304199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00071597099304199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043511390686035

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092577934265137

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092577934265137

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032687187194824

select * from investigation where  investigation_id=2  and office_id= 1 and status=1 
 Execution Time:0.00085091590881348

select * from investigation where  investigation_id=3  and office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select * from investigation where  investigation_id=3  and office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00061988830566406

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0006558895111084

select count(*) as cnt from user where  name = 'lab' and password = '123' and office_id= '1' 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011351108551025

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 318 
 Execution Time:0.00044488906860352

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 344 
 Execution Time:0.00055694580078125

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 344  and `patient_registration_id` = 318 
 Execution Time:0.00052285194396973

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 318 
 Execution Time:0.0018618106842041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select * from examination where examination_id= '297' and   office_id= '1' 
 Execution Time:0.0012710094451904

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 297 
 Execution Time:0.00087499618530273

select * from examination_chargesdetails where  examination_id= '297' 
 Execution Time:0.00053906440734863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093483924865723

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093483924865723

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064992904663086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064992904663086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select * from investigation where  investigation_id=2  and office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043106079101562

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0017580986022949

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043106079101562

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0017580986022949

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043106079101562

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0017580986022949

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00063395500183105

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029802322387695

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00024986267089844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00055694580078125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 235 
 Execution Time:0.00020098686218262

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 235  and `patient_registration_id` = 2 
 Execution Time:0.00053310394287109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013160705566406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013160705566406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 235 
 Execution Time:0.0001828670501709

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 235  and `patient_registration_id` = 2 
 Execution Time:0.00023603439331055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.00050806999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select * from examination where examination_id= '87' and   office_id= '1' 
 Execution Time:0.0010969638824463

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 87 
 Execution Time:0.00060486793518066

select * from examination_chargesdetails where  examination_id= '87' 
 Execution Time:0.00030708312988281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053620338439941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053620338439941

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082015991210938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082015991210938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00051999092102051

select CONCAT(`fname`,' ', `lname`) AS pname from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id where date(examination_chargesdetails.created_date)='2022-03-06' 
 Execution Time:0.00085306167602539

select CONCAT(`fname`,' ', `lname`) AS pname from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id where date(examination_chargesdetails.created_date)='2022-03-06' 
 Execution Time:0.00071096420288086

select CONCAT(`fname`,' ', `lname`) AS pname from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_id 
 Execution Time:0.00094008445739746

select CONCAT(`fname`,' ', `lname`) AS pname from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0005648136138916

select CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0010809898376465

select CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0013680458068848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00047802925109863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 235 
 Execution Time:0.00050902366638184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 235  and `patient_registration_id` = 2 
 Execution Time:0.00048089027404785

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.0010030269622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014939308166504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select * from examination where examination_id= '87' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 87 
 Execution Time:0.00046896934509277

select * from examination_chargesdetails where  examination_id= '87' 
 Execution Time:0.00039505958557129

select * from examination where examination_id= '87' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 87 
 Execution Time:0.00046896934509277

select * from examination_chargesdetails where  examination_id= '87' 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from examination where examination_id= '87' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 87 
 Execution Time:0.00046896934509277

select * from examination_chargesdetails where  examination_id= '87' 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00012779235839844

select * from examination where examination_id= '87' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 87 
 Execution Time:0.00046896934509277

select * from examination_chargesdetails where  examination_id= '87' 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00012779235839844

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00011920928955078

select * from examination where examination_id= '87' and   office_id= '1' 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 87 
 Execution Time:0.00046896934509277

select * from examination_chargesdetails where  examination_id= '87' 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00012779235839844

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00011920928955078

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00011301040649414

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00054502487182617

select doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0010788440704346

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0014679431915283

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0010969638824463

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0011520385742188

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0028038024902344

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0010600090026855

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.00096893310546875

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0012929439544678

select count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.001115083694458

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0015490055084229

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0012669563293457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0013220310211182

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0014760494232178

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0010669231414795

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0011699199676514

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00055813789367676

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.0010910034179688

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00095081329345703

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018069744110107

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0017938613891602

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012378692626953

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.00084900856018066

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0019199848175049

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0013711452484131

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00084495544433594

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0011861324310303

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0012869834899902

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0012869834899902

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.001439094543457

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0011868476867676

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0011868476867676

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00036191940307617

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0011579990386963

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0011579990386963

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0010209083557129

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0010209083557129

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00032591819763184

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00076508522033691

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.001288890838623

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.001288890838623

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.001288890838623

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00015687942504883

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.001288890838623

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00015687942504883

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00014591217041016

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.001288890838623

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00015687942504883

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00014591217041016

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00014901161193848

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.001288890838623

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031399726867676

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00015687942504883

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00014591217041016

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00014901161193848

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001370906829834

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00064492225646973

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00064492225646973

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00064492225646973

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00064492225646973

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00011682510375977

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00064492225646973

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00011682510375977

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00010490417480469

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00064492225646973

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025701522827148

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00014209747314453

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00011682510375977

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00010490417480469

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00010800361633301

select examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,count(*) as cnt,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where date(examination_chargesdetails.created_date)='2022-03-06' group by examination_chargesdetails.created_date 
 Execution Time:0.00085091590881348

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00049996376037598

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00049996376037598

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00022697448730469

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00049996376037598

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00022697448730469

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00049996376037598

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00022697448730469

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00049996376037598

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00022697448730469

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00012898445129395

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.00049996376037598

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00022697448730469

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00012898445129395

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001070499420166

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0008399486541748

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0008399486541748

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0008399486541748

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.0001521110534668

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0008399486541748

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.0001521110534668

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0008399486541748

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.0001521110534668

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00014901161193848

select examination_chargesdetails.charge_id,examination_chargesdetails.particulars_id,examination_chargesdetails.patient_registration_id,examination_chargesdetails.created_date,doctors_registration.name as docname,CONCAT(`fname`,' ', `lname`) AS pname,DATE_FORMAT(date(examination_chargesdetails.created_date),'%d/%m/%Y') AS invesdate from examination_chargesdetails inner join patient_registration on patient_registration.patient_registration_id=examination_chargesdetails.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=examination_chargesdetails.doctor_id where examination_chargesdetails.patient_registration_id = '2'  and examination_chargesdetails.created_date='2022-03-06 14:49:26' and patient_registration.office_id='1' 
 Execution Time:0.0008399486541748

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.0001521110534668

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00014901161193848

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00012087821960449


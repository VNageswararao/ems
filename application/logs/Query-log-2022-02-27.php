select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025279521942139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025279521942139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025279521942139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050811767578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025279521942139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050811767578125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024499893188477

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0050039291381836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021200180053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020110607147217

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025279521942139

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050811767578125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031020641326904

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010149478912354

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010149478912354

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013689994812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074291229248047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074291229248047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070810317993164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070810317993164

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020289421081543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045394897460938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057411193847656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024831295013428

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030858516693115

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024831295013428

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00039100646972656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00025010108947754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002371072769165

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005800724029541

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072383880615234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072383880615234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072383880615234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 186 
 Execution Time:0.00039100646972656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 197 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 186 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 197 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00088882446289062

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00088882446289062

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059008598327637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028181076049805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093317031860352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093317031860352

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017309188842773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017309188842773

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025582313537598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016119480133057

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003659725189209

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059890747070312

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079607963562012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074982643127441

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074982643127441

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044989585876465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032601356506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032601356506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032601356506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033102035522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032601356506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033102035522461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024611949920654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032601356506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033102035522461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024611949920654

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042259693145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0032660961151123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032601356506348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033102035522461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024611949920654

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042259693145752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022249221801758

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 187 
 Execution Time:0.00055694580078125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 198 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00080108642578125

select count(*) as cnt from patient_registration where  patient_registration_id= '158' and  office_id= '1' 
 Execution Time:0.00063991546630859

select count(*) as cnt from patient_registration where  patient_registration_id= '158' and  office_id= '1' 
 Execution Time:0.00063991546630859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='158' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040500164031982

select count(*) as cnt from patient_registration where  patient_registration_id= '158' and  office_id= '1' 
 Execution Time:0.00063991546630859

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='158' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040500164031982

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='158' and  office_id= '1' 
 Execution Time:0.0035271644592285

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027012825012207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060582160949707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003493070602417

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00055813789367676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 189 
 Execution Time:0.00024509429931641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 200 
 Execution Time:0.00016880035400391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006411075592041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087189674377441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 158 
 Execution Time:0.00049996376037598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 204 
 Execution Time:0.00045180320739746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 158 
 Execution Time:0.00043916702270508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 204 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00081086158752441

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002842903137207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025699138641357

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017240047454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00097513198852539

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00097513198852539

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011670589447021

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011670589447021

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081205368041992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015051364898682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050497055053711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059294700622559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059294700622559

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010550022125244

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010550022125244

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050806999206543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020408630371094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 191 
 Execution Time:0.00067400932312012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 202 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029397010803223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098013877868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098013877868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030560493469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031569004058838

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075507164001465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012068748474121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098013877868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076484680175781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 190 
 Execution Time:0.00024986267089844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 201 
 Execution Time:0.00020885467529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 190 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 201 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032830238342285

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00047707557678223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00029802322387695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 188 
 Execution Time:0.00089001655578613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066781044006348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028719902038574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0028719902038574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038599967956543

select * from examination where examination_id= '170' and   office_id= '1' 
 Execution Time:0.0015101432800293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 170 
 Execution Time:0.0036630630493164

select * from examination_chargesdetails where  examination_id= '170' 
 Execution Time:0.0020420551300049

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0025410652160645

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053596496582031

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073695182800293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00034618377685547

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.0002598762512207

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 185 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select * from examination where examination_id= '167' and   office_id= '1' 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016279220581055

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 167 
 Execution Time:0.0002739429473877

select * from examination_chargesdetails where  examination_id= '167' 
 Execution Time:0.00079607963562012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='72' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055384635925293

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078511238098145

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044107437133789

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='85' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00048995018005371

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075101852416992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010666131973267

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010666131973267

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010666131973267

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 193 
 Execution Time:0.0003211498260498

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 205 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00025582313537598

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00029706954956055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 188 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select * from examination where examination_id= '170' and   office_id= '1' 
 Execution Time:0.0011138916015625

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 170 
 Execution Time:0.00060391426086426

select * from examination_chargesdetails where  examination_id= '170' 
 Execution Time:0.00039005279541016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074481964111328

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007169246673584

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002901554107666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 188 
 Execution Time:0.00027918815612793

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.0002288818359375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 188 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select * from examination where examination_id= '170' and   office_id= '1' 
 Execution Time:0.00063800811767578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 170 
 Execution Time:0.00040197372436523

select * from examination_chargesdetails where  examination_id= '170' 
 Execution Time:0.00047898292541504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075817108154297

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075817108154297

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.001906156539917

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00029516220092773

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00019311904907227

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 185 
 Execution Time:0.00059700012207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0094211101531982

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0094211101531982

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select * from examination where examination_id= '167' and   office_id= '1' 
 Execution Time:0.0039839744567871

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 167 
 Execution Time:0.00025796890258789

select * from examination_chargesdetails where  examination_id= '167' 
 Execution Time:0.0001988410949707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0043420791625977

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00087499618530273

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00087499618530273

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00023818016052246

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075197219848633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083184242248535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083184242248535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052690505981445

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083184242248535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095820426940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='31' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091314315795898

select count(*) as cnt from patient_registration where  patient_registration_id= '31' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='31' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091314315795898

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='31' and  office_id= '1' 
 Execution Time:0.00023388862609863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077295303344727

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077295303344727

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069403648376465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057387351989746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033378601074219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057387351989746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035619735717773

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035619735717773

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057387351989746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057387351989746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057330131530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057330131530762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056869983673096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010490417480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049140453338623

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028588771820068

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040006637573242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003364086151123

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0057330131530762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056869983673096

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021195411682129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015919208526611

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070691108703613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070691108703613

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024819374084473

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031270980834961

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035018920898438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010969638824463

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001068115234375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010969638824463

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 195 
 Execution Time:0.00037288665771484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 207 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 195 
 Execution Time:0.00035381317138672

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 207 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014638900756836

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 196 
 Execution Time:0.00021100044250488

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 208 
 Execution Time:0.00017189979553223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 196 
 Execution Time:0.00028014183044434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 208 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 197 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 209 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 197 
 Execution Time:0.00037503242492676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 209 
 Execution Time:0.00041985511779785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 192 
 Execution Time:0.00025415420532227

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 203 
 Execution Time:0.00020098686218262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 192 
 Execution Time:0.00019598007202148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 203 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027179718017578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 192 
 Execution Time:0.00018906593322754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 203 
 Execution Time:0.00014495849609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 189 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 200 
 Execution Time:0.0001988410949707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 189 
 Execution Time:0.00027608871459961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 200 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053882598876953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 194 
 Execution Time:0.00043082237243652

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 206 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064921379089355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010879039764404

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022199153900146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010879039764404

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 186 
 Execution Time:0.00039505958557129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 197 
 Execution Time:0.00033211708068848

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 186 
 Execution Time:0.00064277648925781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029041767120361

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029041767120361

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select * from examination where examination_id= '168' and   office_id= '1' 
 Execution Time:0.0012741088867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 168 
 Execution Time:0.0020098686218262

select * from examination_chargesdetails where  examination_id= '168' 
 Execution Time:0.00089502334594727

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015640258789062

SELECT *
FROM `examination`
WHERE `examination_id` = 168 
 Execution Time:0.001046895980835

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00047898292541504

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0004429817199707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 186 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0021610260009766

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=168 
 Execution Time:0.00078296661376953

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=168 
 Execution Time:0.0005650520324707

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=168 
 Execution Time:0.00045585632324219

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=168 
 Execution Time:0.00031900405883789

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='168' and office_id='1' 
 Execution Time:0.00050497055053711

select * from examination_chargesdetails where  examination_id= '168' 
 Execution Time:0.00022697448730469


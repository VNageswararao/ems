select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029351711273193

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029351711273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002838134765625

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029351711273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002838134765625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016463994979858

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029351711273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002838134765625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016463994979858

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0054309368133545

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029351711273193

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002838134765625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.016463994979858

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0054309368133545

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002957820892334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083649158477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083649158477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.059386968612671

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083649158477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.059386968612671

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083649158477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.059386968612671

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.027292966842651

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083649158477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.059386968612671

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.027292966842651

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083649158477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.059386968612671

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.027292966842651

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053219795227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039908885955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0083649158477783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.059386968612671

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031421184539795

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.027292966842651

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053219795227051

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037920475006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037920475006104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037920475006104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001500129699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037920475006104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001500129699707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023329257965088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.020013093948364

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037920475006104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001500129699707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023329257965088

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035381317138672


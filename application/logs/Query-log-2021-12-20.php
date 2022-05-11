select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.054663181304932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.054663181304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011332988739014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.054663181304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011332988739014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059201717376709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.054663181304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011332988739014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059201717376709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048079490661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.054663181304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011332988739014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059201717376709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048079490661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.054663181304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011332988739014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059201717376709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048079490661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027580261230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.036340951919556

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.054663181304932

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011332988739014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0059201717376709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0048079490661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027580261230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069549083709717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069549083709717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069549083709717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069549083709717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069549083709717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032000541687012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020349025726318

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026891231536865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026891231536865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026891231536865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026891231536865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022668838500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026891231536865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022668838500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026891231536865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022668838500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025069713592529

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029699802398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026891231536865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002316951751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061798095703125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022668838500977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025069713592529

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030684471130371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052430629730225


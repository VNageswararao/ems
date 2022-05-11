select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022039413452148

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022039413452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016219615936279

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022039413452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016219615936279

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022039413452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016219615936279

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015518665313721

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022039413452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016219615936279

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015630722045898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0015518665313721

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001708984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0075340270996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024809837341309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025219917297363

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002377986907959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020370483398438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025177001953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0075340270996094

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016610622406006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016610622406006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016610622406006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022780895233154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016610622406006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022780895233154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016610622406006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022780895233154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016610622406006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022780895233154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031869411468506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024979114532471

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016610622406006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022780895233154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016098022460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031869411468506

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023758411407471

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00079083442687988

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014169216156006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001352071762085

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014169216156006

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00042605400085449

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00037908554077148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '9' and office_id= '1' 
 Execution Time:0.00019001960754395

select * from office where  office_id= '1' 
 Execution Time:0.0005800724029541


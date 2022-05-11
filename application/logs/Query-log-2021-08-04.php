select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030500888824463

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030500888824463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030500888824463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021088123321533

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030500888824463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021088123321533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030500888824463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024750232696533

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021088123321533

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022850036621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047516822814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047516822814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047516822814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042040348052979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022900104522705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047516822814941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001816987991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042040348052979

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0016729831695557

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0016729831695557

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00097799301147461

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014040470123291

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013620853424072

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019700527191162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025858879089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025858879089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025858879089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025858879089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019581317901611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025858879089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019581317901611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025858879089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019581317901611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002932071685791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027928352355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025858879089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056600570678711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019581317901611

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002932071685791

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050187110900879

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068306922912598

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012478828430176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012478828430176

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00053691864013672

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042605400085449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from patient_registration where  mobileno = '9000200470' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from patient_registration where  mobileno = '9000200458' and office_id= '1' 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079798698425293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079798698425293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079798698425293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010910034179688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010850429534912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00079798698425293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080585479736328

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019001960754395

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672


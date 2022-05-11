select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025081634521484

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025081634521484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022909641265869

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025081634521484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022909641265869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030159950256348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025081634521484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022909641265869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031359195709229

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031359195709229

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00020813941955566

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002579927444458

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002579927444458

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027990341186523

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00146484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00146484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00146484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00146484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00146484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00146484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00146484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001990795135498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035786628723145

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select * from office where  office_id= '1' 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001561164855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001561164855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001561164855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098180770874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001561164855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098180770874023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001561164855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098180770874023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001561164855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098180770874023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020492076873779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014219284057617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001561164855957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098180770874023

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020492076873779

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092387199401855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0012850761413574

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00039815902709961

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00039815902709961

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00020384788513184

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00054216384887695

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00054216384887695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035378932952881

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00054216384887695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035378932952881

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0020551681518555

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0020551681518555

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020520687103271

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0020520687103271

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006108283996582

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.0004429817199707


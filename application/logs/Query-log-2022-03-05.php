select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023541450500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023541450500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023541450500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023541450500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022649765014648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023541450500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022649765014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032389163970947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023541450500488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019979476928711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022649765014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002061128616333

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079989433288574

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079989433288574

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.00090718269348145

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.00090718269348145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='187' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011148452758789

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.00090718269348145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='187' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011148452758789

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='187' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0006859302520752

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0006859302520752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060915946960449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060915946960449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019717216491699

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089788436889648

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089788436889648

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066494941711426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066494941711426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066494941711426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066494941711426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066494941711426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052309036254883

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00015497207641602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024349689483643

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024349689483643

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0029659271240234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070691108703613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070691108703613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00027298927307129

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020978450775146

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024878978729248

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020978450775146

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 307 
 Execution Time:0.0002439022064209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 307  and `patient_registration_id` = 286 
 Execution Time:0.0020170211791992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002471923828125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002471923828125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043177604675293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 288 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 309 
 Execution Time:0.00027608871459961

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 309  and `patient_registration_id` = 288 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 288 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 309 
 Execution Time:0.00024795532226562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 309  and `patient_registration_id` = 288 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010359287261963

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010359287261963

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.000640869140625

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.000640869140625

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023317337036133

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072813034057617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072813034057617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003680944442749

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027084350585938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051188468933105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00097823143005371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054001808166504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092816352844238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040197372436523

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00017714500427246

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033688545227051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002281665802002

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039410591125488

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024914741516113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056910514831543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056910514831543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050878524780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050878524780273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015091896057129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050878524780273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058507919311523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021195411682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 289 
 Execution Time:0.00081086158752441

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 310 
 Execution Time:0.0004570484161377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 310  and `patient_registration_id` = 289 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000244140625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043582916259766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00016403198242188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011777877807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011777877807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011777877807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042390823364258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001528263092041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011777877807617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042390823364258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001838207244873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00016903877258301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030999183654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030999183654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030999183654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030999183654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030999183654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086116790771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030999183654785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086116790771484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037407875061035

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001671314239502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001528263092041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037813186645508

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025081634521484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012803077697754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010895729064941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 290 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 311 
 Execution Time:0.00019001960754395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 311  and `patient_registration_id` = 290 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00041890144348145

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004878044128418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 299 
 Execution Time:0.00053000450134277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 320 
 Execution Time:0.00034117698669434

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 320  and `patient_registration_id` = 299 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075411796569824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075411796569824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082898139953613

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082898139953613

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00021481513977051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021841526031494

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021841526031494

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085687637329102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085687637329102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085687637329102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028681755065918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 287 
 Execution Time:0.00021004676818848

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 308 
 Execution Time:0.00024914741516113

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 308  and `patient_registration_id` = 287 
 Execution Time:0.00022792816162109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016522407531738

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 287 
 Execution Time:0.00025081634521484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 308 
 Execution Time:0.0001678466796875

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 308  and `patient_registration_id` = 287 
 Execution Time:0.00034093856811523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 287 
 Execution Time:0.00057601928710938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select * from examination where examination_id= '273' and   office_id= '1' 
 Execution Time:0.00068092346191406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 273 
 Execution Time:0.0027809143066406

select * from examination_chargesdetails where  examination_id= '273' 
 Execution Time:0.002263069152832

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025761127471924

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025761127471924

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050592422485352

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002899169921875

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0029690265655518

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 287 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 308 
 Execution Time:0.00022196769714355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 308  and `patient_registration_id` = 287 
 Execution Time:0.00023293495178223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 287 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030684471130371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070786476135254

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070786476135254

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029802322387695

select * from examination where examination_id= '273' and   office_id= '1' 
 Execution Time:0.00066208839416504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 273 
 Execution Time:0.00029993057250977

select * from examination_chargesdetails where  examination_id= '273' 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 287 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 308 
 Execution Time:0.00017809867858887

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 308  and `patient_registration_id` = 287 
 Execution Time:0.00031185150146484

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 287 
 Execution Time:0.0025949478149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041985511779785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033450126647949

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033450126647949

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011281967163086

select * from examination where examination_id= '273' and   office_id= '1' 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 273 
 Execution Time:0.00025296211242676

select * from examination_chargesdetails where  examination_id= '273' 
 Execution Time:0.00032711029052734

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018520355224609

select count(*) as cnt from patient_registration where  patient_registration_id= '281' and  office_id= '1' 
 Execution Time:0.00076603889465332

select count(*) as cnt from patient_registration where  patient_registration_id= '281' and  office_id= '1' 
 Execution Time:0.00076603889465332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='281' and  doctors_registration.office_id= '1' 
 Execution Time:0.00099897384643555

select count(*) as cnt from patient_registration where  patient_registration_id= '281' and  office_id= '1' 
 Execution Time:0.00076603889465332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='281' and  doctors_registration.office_id= '1' 
 Execution Time:0.00099897384643555

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='281' and  office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014200210571289

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014200210571289

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 299 
 Execution Time:0.00024819374084473

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 320 
 Execution Time:0.00016903877258301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 320  and `patient_registration_id` = 299 
 Execution Time:0.00023198127746582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 299 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078082084655762

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078082084655762

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select * from examination where examination_id= '272' and   office_id= '1' 
 Execution Time:0.00056886672973633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 272 
 Execution Time:0.00037813186645508

select * from examination_chargesdetails where  examination_id= '272' 
 Execution Time:0.00045204162597656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00076699256896973

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.0005791187286377

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='14' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013539791107178

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00069689750671387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094318389892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 187 
 Execution Time:0.00033998489379883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 306 
 Execution Time:0.00022697448730469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 306  and `patient_registration_id` = 187 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_registration where  patient_registration_id= '299' and  office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_registration where  patient_registration_id= '299' and  office_id= '1' 
 Execution Time:0.00049090385437012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='299' and  doctors_registration.office_id= '1' 
 Execution Time:0.0008080005645752

select count(*) as cnt from patient_registration where  patient_registration_id= '299' and  office_id= '1' 
 Execution Time:0.00049090385437012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='299' and  doctors_registration.office_id= '1' 
 Execution Time:0.0008080005645752

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='299' and  office_id= '1' 
 Execution Time:0.0001988410949707

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023484230041504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 300 
 Execution Time:0.00025320053100586

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 321 
 Execution Time:0.00020790100097656

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 321  and `patient_registration_id` = 300 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057506561279297

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029587745666504

select * from investigation where  investigation_id=28  and office_id= 1 and status=1 
 Execution Time:0.00048017501831055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 187 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 306 
 Execution Time:0.00015997886657715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 306  and `patient_registration_id` = 187 
 Execution Time:0.00023317337036133

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 187 
 Execution Time:0.00063800811767578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026540756225586

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026540756225586

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055098533630371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021100044250488

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021100044250488

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016591548919678

select * from examination where examination_id= '274' and   office_id= '1' 
 Execution Time:0.00078511238098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 274 
 Execution Time:0.00041890144348145

select * from examination_chargesdetails where  examination_id= '274' 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086307525634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='17' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073790550231934

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='73' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067305564880371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 300 
 Execution Time:0.00026416778564453

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 321 
 Execution Time:0.00019001960754395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 321  and `patient_registration_id` = 300 
 Execution Time:0.00028586387634277

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 300 
 Execution Time:0.00073504447937012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select * from examination where examination_id= '275' and   office_id= '1' 
 Execution Time:0.0008089542388916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 275 
 Execution Time:0.00026106834411621

select * from examination_chargesdetails where  examination_id= '275' 
 Execution Time:0.00025415420532227

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064897537231445

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081706047058105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081706047058105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061702728271484

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052595138549805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 289 
 Execution Time:0.00097107887268066

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 310 
 Execution Time:0.0033481121063232

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 310  and `patient_registration_id` = 289 
 Execution Time:0.0025098323822021

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 289 
 Execution Time:0.003270149230957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select * from examination where examination_id= '270' and   office_id= '1' 
 Execution Time:0.0036659240722656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 270 
 Execution Time:0.0031721591949463

select * from examination_chargesdetails where  examination_id= '270' 
 Execution Time:0.0039341449737549

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036890506744385

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0036890506744385

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0039370059967041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034570693969727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034570693969727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039629936218262

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 290 
 Execution Time:0.00024914741516113

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 311 
 Execution Time:0.00018906593322754

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 311  and `patient_registration_id` = 290 
 Execution Time:0.00015711784362793

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 290 
 Execution Time:0.00073695182800293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058221817016602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058221817016602

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038480758666992

select * from examination where examination_id= '271' and   office_id= '1' 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 271 
 Execution Time:0.0002748966217041

select * from examination_chargesdetails where  examination_id= '271' 
 Execution Time:0.00025606155395508

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055599212646484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.0004570484161377

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='187' and  doctors_registration.office_id= '1' 
 Execution Time:0.0006248950958252

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.0004570484161377

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='187' and  doctors_registration.office_id= '1' 
 Execution Time:0.0006248950958252

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='187' and  office_id= '1' 
 Execution Time:0.000244140625

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058889389038086

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058889389038086

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079989433288574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010979175567627

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.00045490264892578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='187' and  doctors_registration.office_id= '1' 
 Execution Time:0.00083088874816895

select count(*) as cnt from patient_registration where  patient_registration_id= '187' and  office_id= '1' 
 Execution Time:0.00045490264892578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='187' and  doctors_registration.office_id= '1' 
 Execution Time:0.00083088874816895

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='187' and  office_id= '1' 
 Execution Time:0.00024318695068359

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 294 
 Execution Time:0.00047993659973145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 315 
 Execution Time:0.00045490264892578

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 315  and `patient_registration_id` = 294 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052785873413086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052785873413086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001230001449585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001230001449585

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0056240558624268

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012891292572021

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001230001449585

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 294 
 Execution Time:0.00030994415283203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 315 
 Execution Time:0.0002281665802002

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 315  and `patient_registration_id` = 294 
 Execution Time:0.0002288818359375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 294 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013430118560791

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013430118560791

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069093704223633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008537769317627

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008537769317627

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select * from examination where examination_id= '276' and   office_id= '1' 
 Execution Time:0.00055384635925293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 276 
 Execution Time:0.00029706954956055

select * from examination_chargesdetails where  examination_id= '276' 
 Execution Time:0.00020313262939453

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064706802368164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021679401397705

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021679401397705

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 291 
 Execution Time:0.0034139156341553

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 312 
 Execution Time:0.000762939453125

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 312  and `patient_registration_id` = 291 
 Execution Time:0.002918004989624

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033283233642578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055313110351562

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043511390686035

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019502639770508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082707405090332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082707405090332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044584274291992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0018000602722168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 291 
 Execution Time:0.00054001808166504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 312 
 Execution Time:0.0004880428314209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 312  and `patient_registration_id` = 291 
 Execution Time:0.00034284591674805

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 291 
 Execution Time:0.0010769367218018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select * from examination where examination_id= '277' and   office_id= '1' 
 Execution Time:0.0016980171203613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 277 
 Execution Time:0.00026893615722656

select * from examination_chargesdetails where  examination_id= '277' 
 Execution Time:0.00022292137145996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030708312988281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009770393371582

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072288513183594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.000701904296875

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057601928710938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 291 
 Execution Time:0.00066900253295898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 312 
 Execution Time:0.00031900405883789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 312  and `patient_registration_id` = 291 
 Execution Time:0.00071406364440918

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 291 
 Execution Time:0.0011000633239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select * from examination where examination_id= '277' and   office_id= '1' 
 Execution Time:0.00055599212646484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 277 
 Execution Time:0.00027298927307129

select * from examination_chargesdetails where  examination_id= '277' 
 Execution Time:0.00034999847412109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028610229492188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 281 
 Execution Time:0.00026512145996094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 322 
 Execution Time:0.00018215179443359

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 322  and `patient_registration_id` = 281 
 Execution Time:0.00066113471984863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034689903259277

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027704238891602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040519237518311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020999908447266

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040519237518311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020999908447266

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040519237518311

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020999908447266

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037429332733154

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 281 
 Execution Time:0.0031931400299072

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 322 
 Execution Time:0.003835916519165

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 322  and `patient_registration_id` = 281 
 Execution Time:0.0014779567718506

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 281 
 Execution Time:0.0032670497894287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039348602294922

select * from examination where examination_id= '278' and   office_id= '1' 
 Execution Time:0.0034260749816895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004472017288208

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 278 
 Execution Time:0.0039279460906982

select * from examination_chargesdetails where  examination_id= '278' 
 Execution Time:0.0039451122283936

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016741752624512

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016741752624512

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0077731609344482

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0077731609344482

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029397010803223

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077700614929199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022006034851074

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-05' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010561943054199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053191184997559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075507164001465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075507164001465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094008445739746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-28' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018908977508545

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.0122222900391E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.0122222900391E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.0122222900391E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010108947753906

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.0122222900391E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010108947753906

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.7990036010742E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.0122222900391E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010108947753906

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.7990036010742E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.6069107055664E-5

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.0122222900391E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010108947753906

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.7990036010742E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.6069107055664E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010085105895996

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-02' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018510818481445

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001060962677002

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.7976455688477E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014090538024902

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00012803077697754

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00013995170593262

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.608268737793E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.5115432739258E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010895729064941

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.8943710327148E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00014686584472656

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.0122222900391E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.392333984375E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010108947753906

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:9.7990036010742E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.6069107055664E-5

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00010085105895996

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:8.2015991210938E-5

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020289421081543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066995620727539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017690658569336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004420280456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017690658569336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0020790100097656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.0001368522644043

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-04' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.002471923828125

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-05' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00066709518432617

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-05' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00075197219848633

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-05' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010480880737305

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-05' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014481544494629

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-05' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012791156768799

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-05' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00078797340393066

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-04' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00078392028808594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 305 
 Execution Time:0.00051689147949219

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 327 
 Execution Time:0.00058197975158691

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 327  and `patient_registration_id` = 305 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010201930999756

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010201930999756

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033998489379883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031378269195557

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031378269195557

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036830902099609

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040340423583984

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031378269195557

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036830902099609

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 304 
 Execution Time:0.0028648376464844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 326 
 Execution Time:0.0029788017272949

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 326  and `patient_registration_id` = 304 
 Execution Time:0.0020020008087158

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013420581817627

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013420581817627

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.003680944442749

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 305 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 327 
 Execution Time:0.00017595291137695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 327  and `patient_registration_id` = 305 
 Execution Time:0.00014400482177734

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 305 
 Execution Time:0.00074911117553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088095664978027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088095664978027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057291984558105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038385391235352

select * from examination where examination_id= '279' and   office_id= '1' 
 Execution Time:0.00082087516784668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055480003356934

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 279 
 Execution Time:0.00049304962158203

select * from examination_chargesdetails where  examination_id= '279' 
 Execution Time:0.00032901763916016

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='94' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078487396240234

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057792663574219

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select count(*) as cnt from medicine where  name = 'moxigram -kt' and office_id= '1' 
 Execution Time:0.0035340785980225

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0041000843048096

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 305 
 Execution Time:0.00026679039001465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 327 
 Execution Time:0.0001988410949707

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 327  and `patient_registration_id` = 305 
 Execution Time:0.00023603439331055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 305 
 Execution Time:0.00056290626525879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select * from examination where examination_id= '279' and   office_id= '1' 
 Execution Time:0.00093197822570801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 279 
 Execution Time:0.00075912475585938

select * from examination_chargesdetails where  examination_id= '279' 
 Execution Time:0.00028610229492188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011460781097412

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011460781097412

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='94' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00051403045654297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='95' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061583518981934

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010371208190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 304 
 Execution Time:0.00030207633972168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 326 
 Execution Time:0.00027108192443848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 326  and `patient_registration_id` = 304 
 Execution Time:0.00032210350036621

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 304 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select * from examination where examination_id= '280' and   office_id= '1' 
 Execution Time:0.00061392784118652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 280 
 Execution Time:0.00058889389038086

select * from examination_chargesdetails where  examination_id= '280' 
 Execution Time:0.00044703483581543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079894065856934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00079894065856934

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041818618774414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000457763671875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.000457763671875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077295303344727

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065708160400391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 304 
 Execution Time:0.00039982795715332

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 326 
 Execution Time:0.00033307075500488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 326  and `patient_registration_id` = 304 
 Execution Time:0.00022006034851074

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 304 
 Execution Time:0.00069594383239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015878677368164

select * from examination where examination_id= '280' and   office_id= '1' 
 Execution Time:0.0010879039764404

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 280 
 Execution Time:0.00028777122497559

select * from examination_chargesdetails where  examination_id= '280' 
 Execution Time:0.00021600723266602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061893463134766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061893463134766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0030100345611572

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0030100345611572

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013411045074463

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013411045074463

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022041797637939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022041797637939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022041797637939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022041797637939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022041797637939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002249002456665

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022041797637939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002249002456665

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019791126251221

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.001086950302124

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022041797637939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096821784973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002249002456665

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00064182281494141

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 307 
 Execution Time:0.00027608871459961

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 307  and `patient_registration_id` = 286 
 Execution Time:0.00048589706420898

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 286 
 Execution Time:0.00092411041259766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select * from examination where examination_id= '268' and   office_id= '1' 
 Execution Time:0.0011389255523682

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 268 
 Execution Time:0.00055193901062012

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00042295455932617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077986717224121

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077986717224121

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054311752319336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085902214050293

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002589225769043

SELECT *
FROM `examination`
WHERE `examination_id` = 268 
 Execution Time:0.0011270046234131

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.0004270076751709

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00067400932312012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0002138614654541

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=268 
 Execution Time:0.0012490749359131

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=268 
 Execution Time:0.00076484680175781

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=268 
 Execution Time:0.00080990791320801

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=268 
 Execution Time:0.00043702125549316

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='268' and office_id='1' 
 Execution Time:0.0010747909545898

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027229785919189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027229785919189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027229785919189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027229785919189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011420249938965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027229785919189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011420249938965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013730525970459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003525972366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031781196594238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038750171661377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027229785919189

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011420249938965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013730525970459

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='187' and  office_id= '1' 
 Execution Time:0.00082516670227051

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0003352165222168

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0003352165222168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053191184997559

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.0003352165222168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053191184997559

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00015807151794434

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00099992752075195

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00099992752075195

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068092346191406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068092346191406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055885314941406

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055885314941406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047087669372559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047087669372559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020110607147217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020110607147217

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016770362854004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020110607147217

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016770362854004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020110607147217

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016770362854004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020110607147217

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016770362854004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020570755004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020110607147217

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016770362854004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020570755004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022790431976318

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002795934677124

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019009113311768

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020110607147217

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016770362854004

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017499923706055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020570755004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00058507919311523

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00070905685424805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032997131347656

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='181' and  office_id= '1' 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020570755004883

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00056099891662598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='181' and  doctors_registration.office_id= '1' 
 Execution Time:0.001291036605835

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00056099891662598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='181' and  doctors_registration.office_id= '1' 
 Execution Time:0.001291036605835

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='181' and  office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00046396255493164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='181' and  doctors_registration.office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00046396255493164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='181' and  doctors_registration.office_id= '1' 
 Execution Time:0.00065207481384277

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='181' and  office_id= '1' 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select count(*) as cnt from patient_registration where  patient_registration_id= '140' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '140' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='140' and  doctors_registration.office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_registration where  patient_registration_id= '140' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='140' and  doctors_registration.office_id= '1' 
 Execution Time:0.00055313110351562

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='140' and  office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00050711631774902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053119659423828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00064897537231445

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00024700164794922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='19' and  doctors_registration.office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00024700164794922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='19' and  doctors_registration.office_id= '1' 
 Execution Time:0.00056099891662598

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='19' and  office_id= '1' 
 Execution Time:0.00019502639770508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001298189163208

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011608600616455

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-05' and  '2022-03-05' and  billing_master.office_id= 1        
 Execution Time:0.0011060237884521

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-05' and  '2022-03-05' and  billing_master.office_id= 1        
 Execution Time:0.0011060237884521

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
		where billing=0 and appointment_date between  '2022-03-05' and '2022-03-05' and  patient_registration.office_id= 1      
 Execution Time:0.0031280517578125

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-05' and  '2022-03-05' and  billing_master.office_id= 1        
 Execution Time:0.0014472007751465

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-05' and  '2022-03-05' and  billing_master.office_id= 1        
 Execution Time:0.0014472007751465

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
		where billing=0 and appointment_date between  '2022-03-05' and '2022-03-05' and  patient_registration.office_id= 1      
 Execution Time:0.002662181854248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010008811950684

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

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
		where billing=0 and appointment_date between  '2022-03-05' and '2022-03-05' and  patient_registration.office_id= 1      
 Execution Time:0.0026578903198242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011758804321289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-05' and  '2022-03-05' and  billing_master.office_id= 1        
 Execution Time:0.0012149810791016

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-05' and  '2022-03-05' and  billing_master.office_id= 1        
 Execution Time:0.0012149810791016

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
		where billing=0 and appointment_date between  '2022-03-05' and '2022-03-05' and  patient_registration.office_id= 1      
 Execution Time:0.0027859210968018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012578964233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00038790702819824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00083613395690918

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00038790702819824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00083613395690918

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090980529785156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090980529785156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039792060852051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090980529785156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.00037407875061035

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=10  
 Execution Time:0.0016069412231445

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.00037407875061035

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=10  
 Execution Time:0.0016069412231445

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=10  
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.00037407875061035

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=10  
 Execution Time:0.0016069412231445

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=10  
 Execution Time:0.00043702125549316

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='10' and  office_id= '1' 
 Execution Time:0.00018191337585449

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.000701904296875

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.000701904296875

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.0016989707946777

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.000701904296875

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.0016989707946777

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=12  
 Execution Time:0.00063014030456543

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.000701904296875

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=12  
 Execution Time:0.0016989707946777

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=12  
 Execution Time:0.00063014030456543

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='12' and  office_id= '1' 
 Execution Time:0.0016319751739502

select count(*) as cnt from patient_registration where  patient_registration_id= '25' and  office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from patient_registration where  patient_registration_id= '25' and  office_id= '1' 
 Execution Time:0.00060606002807617

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=25  
 Execution Time:0.002586841583252

select count(*) as cnt from patient_registration where  patient_registration_id= '25' and  office_id= '1' 
 Execution Time:0.00060606002807617

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=25  
 Execution Time:0.002586841583252

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=25  
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_registration where  patient_registration_id= '25' and  office_id= '1' 
 Execution Time:0.00060606002807617

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=25  
 Execution Time:0.002586841583252

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=25  
 Execution Time:0.00059795379638672

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='25' and  office_id= '1' 
 Execution Time:0.00018405914306641

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.00043392181396484

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=8  
 Execution Time:0.0018579959869385

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.00043392181396484

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=8  
 Execution Time:0.0018579959869385

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=8  
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.00043392181396484

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=8  
 Execution Time:0.0018579959869385

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=8  
 Execution Time:0.00040698051452637

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='8' and  office_id= '1' 
 Execution Time:0.00017714500427246

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00078201293945312

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00078201293945312

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
 Execution Time:0.002622127532959

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00078201293945312

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
 Execution Time:0.002622127532959

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=15  
 Execution Time:0.0011229515075684

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00078201293945312

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
 Execution Time:0.002622127532959

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=15  
 Execution Time:0.0011229515075684

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='15' and  office_id= '1' 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00021481513977051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011014938354492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00027799606323242

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=6  
 Execution Time:0.0019111633300781

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00027799606323242

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=6  
 Execution Time:0.0019111633300781

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=6  
 Execution Time:0.00070285797119141

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00057315826416016

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00057315826416016

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
 Execution Time:0.002208948135376

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00057315826416016

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
 Execution Time:0.002208948135376

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=4  
 Execution Time:0.00055384635925293

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00057315826416016

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
 Execution Time:0.002208948135376

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=4  
 Execution Time:0.00055384635925293

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00018405914306641

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00046396255493164

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=16  
 Execution Time:0.0020380020141602

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00046396255493164

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=16  
 Execution Time:0.0020380020141602

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=16  
 Execution Time:0.00053691864013672

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00046396255493164

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=16  
 Execution Time:0.0020380020141602

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=16  
 Execution Time:0.00053691864013672

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='16' and  office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00042200088500977

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=19  
 Execution Time:0.0010421276092529

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00042200088500977

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=19  
 Execution Time:0.0010421276092529

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=19  
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00042200088500977

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=19  
 Execution Time:0.0010421276092529

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=19  
 Execution Time:0.00029802322387695

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='19' and  office_id= '1' 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058722496032715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058722496032715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058722496032715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00048208236694336

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
 Execution Time:0.0016331672668457

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00048208236694336

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
 Execution Time:0.0016331672668457

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00052905082702637

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00048208236694336

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
 Execution Time:0.0016331672668457

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00052905082702637

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00015997886657715

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00041699409484863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0014870166778564

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00041699409484863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0014870166778564

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00055193901062012

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00041699409484863

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0014870166778564

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00055193901062012

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00016498565673828

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0012979507446289

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0012979507446289

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.0021560192108154

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0012979507446289

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.0021560192108154

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=7  
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.0012979507446289

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=7  
 Execution Time:0.0021560192108154

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=7  
 Execution Time:0.00066590309143066

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00015902519226074

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00045990943908691

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=9  
 Execution Time:0.0017580986022949

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00045990943908691

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=9  
 Execution Time:0.0017580986022949

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=9  
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00045990943908691

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=9  
 Execution Time:0.0017580986022949

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=9  
 Execution Time:0.00053596496582031

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='9' and  office_id= '1' 
 Execution Time:0.00015807151794434

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00039315223693848

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00039315223693848

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=19  
 Execution Time:0.0011398792266846

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00039315223693848

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=19  
 Execution Time:0.0011398792266846

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=19  
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00039315223693848

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=19  
 Execution Time:0.0011398792266846

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=19  
 Execution Time:0.00035595893859863

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='19' and  office_id= '1' 
 Execution Time:0.00016999244689941

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.00061702728271484

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.00061702728271484

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=21  
 Execution Time:0.00223708152771

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.00061702728271484

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=21  
 Execution Time:0.00223708152771

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=21  
 Execution Time:0.00092005729675293

select count(*) as cnt from patient_registration where  patient_registration_id= '21' and  office_id= '1' 
 Execution Time:0.00061702728271484

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=21  
 Execution Time:0.00223708152771

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=21  
 Execution Time:0.00092005729675293

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='21' and  office_id= '1' 
 Execution Time:0.00016403198242188

select count(*) as cnt from patient_registration where  patient_registration_id= '29' and  office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from patient_registration where  patient_registration_id= '29' and  office_id= '1' 
 Execution Time:0.00070309638977051

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=29  
 Execution Time:0.0021979808807373

select count(*) as cnt from patient_registration where  patient_registration_id= '29' and  office_id= '1' 
 Execution Time:0.00070309638977051

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=29  
 Execution Time:0.0021979808807373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=29  
 Execution Time:0.0007932186126709

select count(*) as cnt from patient_registration where  patient_registration_id= '29' and  office_id= '1' 
 Execution Time:0.00070309638977051

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=29  
 Execution Time:0.0021979808807373

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=29  
 Execution Time:0.0007932186126709

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='29' and  office_id= '1' 
 Execution Time:0.00021696090698242

select count(*) as cnt from patient_registration where  patient_registration_id= '42' and  office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from patient_registration where  patient_registration_id= '42' and  office_id= '1' 
 Execution Time:0.00039482116699219

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=42  
 Execution Time:0.0009608268737793

select count(*) as cnt from patient_registration where  patient_registration_id= '42' and  office_id= '1' 
 Execution Time:0.00039482116699219

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=42  
 Execution Time:0.0009608268737793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=42  
 Execution Time:0.00032210350036621

select count(*) as cnt from patient_registration where  patient_registration_id= '42' and  office_id= '1' 
 Execution Time:0.00039482116699219

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=42  
 Execution Time:0.0009608268737793

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=42  
 Execution Time:0.00032210350036621

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='42' and  office_id= '1' 
 Execution Time:0.00015711784362793

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00031399726867676

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=181  
 Execution Time:0.0013530254364014

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00031399726867676

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=181  
 Execution Time:0.0013530254364014

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=181  
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_registration where  patient_registration_id= '181' and  office_id= '1' 
 Execution Time:0.00031399726867676

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=181  
 Execution Time:0.0013530254364014

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=181  
 Execution Time:0.00037789344787598

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='181' and  office_id= '1' 
 Execution Time:0.00017285346984863

select count(*) as cnt from patient_registration where  patient_registration_id= '180' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '180' and  office_id= '1' 
 Execution Time:0.00038599967956543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=180  
 Execution Time:0.0014019012451172

select count(*) as cnt from patient_registration where  patient_registration_id= '180' and  office_id= '1' 
 Execution Time:0.00038599967956543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=180  
 Execution Time:0.0014019012451172

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=180  
 Execution Time:0.00039482116699219

select count(*) as cnt from patient_registration where  patient_registration_id= '180' and  office_id= '1' 
 Execution Time:0.00038599967956543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=180  
 Execution Time:0.0014019012451172

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=180  
 Execution Time:0.00039482116699219

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='180' and  office_id= '1' 
 Execution Time:0.00018501281738281

select count(*) as cnt from patient_registration where  patient_registration_id= '177' and  office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_registration where  patient_registration_id= '177' and  office_id= '1' 
 Execution Time:0.00042009353637695

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=177  
 Execution Time:0.0013818740844727

select count(*) as cnt from patient_registration where  patient_registration_id= '177' and  office_id= '1' 
 Execution Time:0.00042009353637695

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=177  
 Execution Time:0.0013818740844727

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=177  
 Execution Time:0.0004580020904541

select count(*) as cnt from patient_registration where  patient_registration_id= '176' and  office_id= '1' 
 Execution Time:0.00046682357788086

select count(*) as cnt from patient_registration where  patient_registration_id= '176' and  office_id= '1' 
 Execution Time:0.00046682357788086

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=176  
 Execution Time:0.0017781257629395

select count(*) as cnt from patient_registration where  patient_registration_id= '176' and  office_id= '1' 
 Execution Time:0.00046682357788086

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=176  
 Execution Time:0.0017781257629395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=176  
 Execution Time:0.00047516822814941

select count(*) as cnt from patient_registration where  patient_registration_id= '176' and  office_id= '1' 
 Execution Time:0.00046682357788086

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=176  
 Execution Time:0.0017781257629395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=176  
 Execution Time:0.00047516822814941

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='176' and  office_id= '1' 
 Execution Time:0.00016903877258301


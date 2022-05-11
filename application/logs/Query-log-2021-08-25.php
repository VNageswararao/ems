select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075008869171143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075008869171143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075008869171143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025038719177246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075008869171143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025038719177246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075008869171143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025038719177246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075008869171143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025038719177246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043389797210693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0075008869171143

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030629634857178

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025038719177246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043389797210693

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0005500316619873

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00061511993408203

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00061511993408203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from patient_registration where  mobileno = '9000200470' and office_id= '1' 
 Execution Time:0.00067996978759766

select count(*) as cnt from patient_registration where  mobileno = '9000200471' and office_id= '1' 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select * from office where  office_id= '1' 
 Execution Time:0.0015571117401123

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00040602684020996

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `logo` = 'temp.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00067901611328125

select * from office where  office_id= '1' 
 Execution Time:0.0007328987121582

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0027279853820801

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from appointment_type where  name = 'Retina' and office_id= '1' 
 Execution Time:0.00069189071655273

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select count(*) as cnt from opdcharge where  name = 'Retina consultation' and office_id= '1' 
 Execution Time:0.00062417984008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041699409484863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.0020670890808105

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.0020670890808105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00052309036254883

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00052309036254883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00052309036254883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00051999092102051

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00023818016052246

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00039815902709961

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00039815902709961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00018811225891113

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00037193298339844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00037193298339844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043702125549316

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00056099891662598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042605400085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00043606758117676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049591064453125

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00022482872009277

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029301643371582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00070810317993164

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00070810317993164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070500373840332

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00070810317993164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070500373840332

select fname,lname,mrdno from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004570484161377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00098109245300293

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00098109245300293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078201293945312

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00098109245300293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078201293945312

select fname,lname,mrdno from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00048303604125977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034308433532715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048398971557617

select fname,lname,mrdno from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00047707557678223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050098896026611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050098896026611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050098896026611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012269020080566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050098896026611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012269020080566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050098896026611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012269020080566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050098896026611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012269020080566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050098896026611

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012269020080566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.0005180835723877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='8' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.0005180835723877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='8' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050902366638184

select fname,lname,mrdno from patient_registration where  patient_registration_id='8' and  office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00024890899658203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074100494384766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053501129150391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078988075256348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00069808959960938

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00018095970153809

select count(*) as cnt from patient_registration where  mobileno = '2589631478' and office_id= '1' 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042414665222168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042414665222168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042414665222168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042414665222168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00037503242492676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0004570484161377

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00051307678222656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021212100982666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021212100982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021212100982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00039887428283691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00039887428283691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00040602684020996

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00016117095947266

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00025200843811035

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0041501522064209

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0005640983581543

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0021729469299316

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0021729469299316

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00030803680419922

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.0005037784576416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select * from office where  office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00066900253295898

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00066900253295898

UPDATE `office` SET `logo` = '', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00069785118103027

select * from office where  office_id= '1' 
 Execution Time:0.00040221214294434

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00056099891662598

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203


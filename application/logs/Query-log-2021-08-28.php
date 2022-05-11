select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-28' and '2021-08-28' and  patient_registration.office_id= 1      
 Execution Time:0.00071811676025391

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-01' and '2021-08-28' and  patient_registration.office_id= 1      
 Execution Time:0.0014209747314453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018758773803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018758773803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019781589508057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018758773803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019781589508057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018758773803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019781589508057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078840255737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050499439239502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002032995223999

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018758773803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019781589508057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078840255737305

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00042295455932617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00024604797363281

select * from office where  office_id= '1' 
 Execution Time:0.00072908401489258

select * from office where  office_id= '1' 
 Execution Time:0.00074505805969238

select * from office where  office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00048112869262695

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = '', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0004270076751709

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = '001', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0004880428314209

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = '', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00068116188049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020813941955566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032711029052734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013303756713867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00047492980957031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0002138614654541

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00044393539428711

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00021815299987793

select count(*) as cnt from patient_registration where  mobileno = '1234567891' and office_id= '1' 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023698806762695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select * from office where  office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00052022933959961

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00052022933959961

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'ABY', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00043296813964844

select * from office where  office_id= '1' 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025415420532227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00050902366638184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00032615661621094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00062298774719238

select patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00039219856262207

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00067901611328125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00082492828369141

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00067901611328125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00082492828369141

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00023484230041504

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030088424682617

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030088424682617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00030088424682617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048995018005371

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00078701972961426

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012199878692627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-28' and '2021-08-28' and  billing_master.office_id= 1       
 Execution Time:0.00079989433288574

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1       
 Execution Time:0.00090503692626953

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00018501281738281

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00018501281738281

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00018501281738281

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00012111663818359

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00018501281738281

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00012111663818359

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00011110305786133

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00018501281738281

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00012111663818359

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00011110305786133

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00011610984802246

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,charge_type.name as charge,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join charge_type on billing_detail.charge_id=charge_type.charge_type_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2021-08-01' and '2021-08-28' and  billing_master.office_id= 1         
 Execution Time:0.0011560916900635

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00025296211242676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0001380443572998

select * from opdcharge where  opdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00018501281738281

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00016283988952637

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00012111663818359

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00011110305786133

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00011610984802246

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00011992454528809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002601146697998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041389465332031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060606002807617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054717063903809

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00060606002807617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054717063903809

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00017809867858887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00042891502380371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00042891502380371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0004880428314209

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018477439880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018477439880371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018477439880371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042605400085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027704238891602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00028014183044434

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0004429817199707

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00020885467529297

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0005490779876709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  mobileno = '9000200470' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from patient_registration where  mobileno = '9000200479' and office_id= '1' 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021886825561523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031208992004395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0002591609954834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051307678222656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00066614151000977

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00066614151000977

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00022220611572266

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00045490264892578

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00045490264892578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00024199485778809

select count(*) as cnt from patient_registration where  mobileno = '1234567890' and office_id= '1' 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020480155944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037312507629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061917304992676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00040411949157715

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00040411949157715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00040411949157715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050902366638184

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015592575073242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015592575073242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015592575073242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015592575073242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029492378234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0005340576171875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079107284545898

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0005340576171875

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00079107284545898

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00095605850219727

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00095605850219727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045790672302246

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00095605850219727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045790672302246

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.0009310245513916

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_registration where  patient_registration_id= '7' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='7' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049710273742676

select fname,lname,mrdno from patient_registration where  patient_registration_id='7' and  office_id= '1' 
 Execution Time:0.0001988410949707

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005650520324707

select fname,lname,mrdno from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_registration where  patient_registration_id= '18' and  office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_registration where  patient_registration_id= '18' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='18' and  doctors_registration.office_id= '1' 
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_registration where  patient_registration_id= '18' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='18' and  doctors_registration.office_id= '1' 
 Execution Time:0.00061297416687012

select fname,lname,mrdno from patient_registration where  patient_registration_id='18' and  office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='16' and  doctors_registration.office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='16' and  doctors_registration.office_id= '1' 
 Execution Time:0.00045013427734375

select fname,lname,mrdno from patient_registration where  patient_registration_id='16' and  office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005500316619873

select fname,lname,mrdno from patient_registration where  patient_registration_id='15' and  office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00040888786315918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00040888786315918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050997734069824

select fname,lname,mrdno from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013651847839355

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005190372467041

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00049209594726562

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084185600280762

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00049209594726562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084185600280762

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00020694732666016

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from patient_registration where  patient_registration_id= '4' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='4' and  doctors_registration.office_id= '1' 
 Execution Time:0.00062704086303711

select fname,lname,mrdno from patient_registration where  patient_registration_id='4' and  office_id= '1' 
 Execution Time:0.00020122528076172

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048685073852539

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048685073852539

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00048589706420898

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00033807754516602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00033807754516602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043392181396484

select fname,lname,mrdno from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00018215179443359

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.0004889965057373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='10' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.0004889965057373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='10' and  doctors_registration.office_id= '1' 
 Execution Time:0.00043416023254395

select fname,lname,mrdno from patient_registration where  patient_registration_id='10' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='9' and  doctors_registration.office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_registration where  patient_registration_id= '9' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='9' and  doctors_registration.office_id= '1' 
 Execution Time:0.00030803680419922

select fname,lname,mrdno from patient_registration where  patient_registration_id='9' and  office_id= '1' 
 Execution Time:0.00015497207641602

select count(*) as cnt from patient_registration where  patient_registration_id= '11' and  office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_registration where  patient_registration_id= '11' and  office_id= '1' 
 Execution Time:0.00030803680419922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='11' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070405006408691

select count(*) as cnt from patient_registration where  patient_registration_id= '11' and  office_id= '1' 
 Execution Time:0.00030803680419922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='11' and  doctors_registration.office_id= '1' 
 Execution Time:0.00070405006408691

select fname,lname,mrdno from patient_registration where  patient_registration_id='11' and  office_id= '1' 
 Execution Time:0.00076889991760254

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00051593780517578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='12' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00051593780517578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='12' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053906440734863

select fname,lname,mrdno from patient_registration where  patient_registration_id='12' and  office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00034713745117188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00034713745117188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.00038313865661621

select fname,lname,mrdno from patient_registration where  patient_registration_id='13' and  office_id= '1' 
 Execution Time:0.00018000602722168

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='14' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.00045108795166016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='14' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063109397888184

select fname,lname,mrdno from patient_registration where  patient_registration_id='14' and  office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.00032711029052734

select fname,lname,mrdno from patient_registration where  patient_registration_id='15' and  office_id= '1' 
 Execution Time:0.00015401840209961

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00034308433532715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='16' and  doctors_registration.office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_registration where  patient_registration_id= '16' and  office_id= '1' 
 Execution Time:0.00034308433532715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='16' and  doctors_registration.office_id= '1' 
 Execution Time:0.00028300285339355

select fname,lname,mrdno from patient_registration where  patient_registration_id='16' and  office_id= '1' 
 Execution Time:0.00013399124145508

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00040102005004883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00040102005004883

select fname,lname,mrdno from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.00019502639770508

select count(*) as cnt from patient_registration where  patient_registration_id= '18' and  office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from patient_registration where  patient_registration_id= '18' and  office_id= '1' 
 Execution Time:0.00048184394836426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='18' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from patient_registration where  patient_registration_id= '18' and  office_id= '1' 
 Execution Time:0.00048184394836426

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='18' and  doctors_registration.office_id= '1' 
 Execution Time:0.0005180835723877

select fname,lname,mrdno from patient_registration where  patient_registration_id='18' and  office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00042009353637695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='19' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00042009353637695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='19' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058794021606445

select fname,lname,mrdno from patient_registration where  patient_registration_id='19' and  office_id= '1' 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00056815147399902

select count(*) as cnt from patient_registration where  patient_registration_id= '18' and  office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from patient_registration where  patient_registration_id= '10' and  office_id= '1' 
 Execution Time:0.00043582916259766

select count(*) as cnt from patient_registration where  patient_registration_id= '12' and  office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_registration where  patient_registration_id= '14' and  office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036883354187012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002591609954834

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013680458068848

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00057101249694824

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00057101249694824

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00017905235290527

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00038886070251465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00037980079650879

select count(*) as cnt from patient_registration where  patient_registration_id= '17' and  office_id= '1' 
 Execution Time:0.00038886070251465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='17' and  doctors_registration.office_id= '1' 
 Execution Time:0.00037980079650879

select fname,lname,mrdno from patient_registration where  patient_registration_id='17' and  office_id= '1' 
 Execution Time:0.00018215179443359

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048398971557617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00048398971557617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00059795379638672

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00039196014404297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='19' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_registration where  patient_registration_id= '19' and  office_id= '1' 
 Execution Time:0.00039196014404297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='19' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049686431884766

select fname,lname,mrdno from patient_registration where  patient_registration_id='19' and  office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.00032591819763184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='8' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '8' and  office_id= '1' 
 Execution Time:0.00032591819763184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='8' and  doctors_registration.office_id= '1' 
 Execution Time:0.00050997734069824

select fname,lname,mrdno from patient_registration where  patient_registration_id='8' and  office_id= '1' 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00044107437133789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0003821849822998

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00044107437133789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0003821849822998

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00018405914306641

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059795379638672

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059795379638672

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003199577331543

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001368522644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001368522644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001368522644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001368522644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001368522644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032591819763184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00050806999206543

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00050806999206543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00050806999206543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00053095817565918

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025486946105957

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00051283836364746

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select * from opdcharge where  opdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.001755952835083

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.001755952835083

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031614303588867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066685676574707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066685676574707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-28' and '2021-08-28' and  patient_registration.office_id= 1      
 Execution Time:0.00076794624328613

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-01' and '2021-08-28' and  patient_registration.office_id= 1      
 Execution Time:0.00073385238647461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select * from office where  office_id= '1' 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035405158996582

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00053596496582031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_registration where  mobileno = '1234567891' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_registration where  mobileno = '1234567896' and office_id= '1' 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023198127746582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032806396484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00077080726623535

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00077080726623535

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00068998336791992

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00054287910461426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027108192443848

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00039100646972656

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00055694580078125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001025915145874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001025915145874

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011579036712646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001025915145874

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011579036712646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001025915145874

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011579036712646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022199153900146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013630390167236

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010929107666016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001025915145874

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.011579036712646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022199153900146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001072883605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001072883605957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022718906402588

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-28' and '2021-08-28' and  billing_master.office_id= 1       
 Execution Time:0.0008389949798584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034029483795166

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034029483795166

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-08-28' and '2021-08-28' and  billing_master.office_id= 1       
 Execution Time:0.0010900497436523


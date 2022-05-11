select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027499198913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027499198913574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020079612731934

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-11' and '2021-08-11' and  patient_registration.office_id= 1      
 Execution Time:0.0058891773223877

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-01-01' and '2021-08-11' and  patient_registration.office_id= 1      
 Execution Time:0.002202033996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031111240386963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031111240386963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022029876708984

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-11' and '2021-08-11' and  patient_registration.office_id= 1      
 Execution Time:0.0029029846191406

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-01' and '2021-08-11' and  patient_registration.office_id= 1      
 Execution Time:0.00074100494384766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-04-26' and '2021-08-11' and  patient_registration.office_id= 1      
 Execution Time:0.0010640621185303

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002051830291748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002345085144043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002051830291748

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021820068359375

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00028419494628906

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00028419494628906

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00028419494628906

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00040197372436523

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00014710426330566

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025558471679688

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025558471679688

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023889541625977

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034670829772949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023388862609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034670829772949

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id where appointment_date between  '2021-08-11' and '2021-08-11' and  patient_registration.office_id= 1      
 Execution Time:0.00061678886413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00045394897460938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052094459533691

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00034308433532715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00034308433532715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049185752868652

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00015521049499512

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024271011352539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024271011352539

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026607513427734

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075483322143555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809


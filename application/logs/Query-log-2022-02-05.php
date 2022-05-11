select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002687931060791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002687931060791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002687931060791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002687931060791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050530433654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002687931060791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050530433654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023641586303711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0022819042205811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002687931060791

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050530433654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023300647735596

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00065708160400391

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00065708160400391

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040102005004883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072979927062988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='158' and  office_id= '1' 
 Execution Time:0.00087714195251465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021660327911377

select count(*) as cnt from patient_registration where  patient_registration_id= '158' and  office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_registration where  patient_registration_id= '158' and  office_id= '1' 
 Execution Time:0.00042605400085449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='158' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091099739074707

select count(*) as cnt from patient_registration where  patient_registration_id= '158' and  office_id= '1' 
 Execution Time:0.00042605400085449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='158' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091099739074707

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='158' and  office_id= '1' 
 Execution Time:0.00025105476379395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033950805664062

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033950805664062

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062799453735352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022671222686768

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022058486938477

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 158 
 Execution Time:0.00040316581726074

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 198 
 Execution Time:0.00028419494628906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-05' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0038149356842041

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015251636505127

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015251636505127

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0021281242370605

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010337829589844

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010337829589844

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037312507629395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006411075592041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006411075592041

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013871192932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013871192932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013871192932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013871192932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014081001281738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013871192932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014081001281738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019071102142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015959739685059

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013871192932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014081001281738

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00054597854614258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00031709671020508

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0071001052856445

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0071001052856445

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0014851093292236

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062704086303711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031614303588867


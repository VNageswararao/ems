select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0054488182067871

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0054488182067871

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0068159103393555

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00098085403442383

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00098085403442383

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050091743469238

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0025978088378906

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0025978088378906

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00084686279296875

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013880729675293

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013880729675293

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00051617622375488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051116943359375

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001121997833252

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001121997833252

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00028181076049805

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011990070343018

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011990070343018

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012459754943848

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012459754943848

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0016460418701172

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0016460418701172

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001025915145874

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001025915145874

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00068879127502441

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047206878662109

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015149116516113

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015149116516113

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015039443969727

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='18' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015039443969727

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00048518180847168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055408477783203

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00064301490783691

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001431941986084

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001431941986084

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-03' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0008080005645752

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014379024505615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017712116241455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017712116241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087499618530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017712116241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087499618530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017712116241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087499618530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017712116241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087499618530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001086950302124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017712116241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087499618530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001086950302124

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010831356048584

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017712116241455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00087499618530273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001086950302124

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00063395500183105

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051403045654297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00021910667419434

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00054287910461426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00048398971557617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010311603546143

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010311603546143

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010311603546143

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.0004420280456543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00015902519226074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013208389282227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.00056290626525879

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.00089812278747559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0063929557800293

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0063929557800293

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019638538360596

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0019638538360596

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0031528472900391

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0031528472900391

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070381164550781

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052285194396973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013871192932129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013871192932129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select * from examination where examination_id= '69' and   office_id= '1' 
 Execution Time:0.00080013275146484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 69 
 Execution Time:0.0016629695892334

select * from examination_chargesdetails where  examination_id= '69' 
 Execution Time:0.0012381076812744

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014779567718506

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014779567718506

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00060582160949707

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00060582160949707

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049996376037598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033307075500488

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016179084777832

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016179084777832

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00090718269348145

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00090718269348145

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00050687789916992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031089782714844

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012581348419189

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012581348419189

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00048708915710449

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011889934539795

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011889934539795

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00033807754516602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029301643371582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029301643371582

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030088424682617

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089192390441895

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00089192390441895

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070595741271973

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067996978759766

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013649463653564

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013649463653564

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00036716461181641

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00099802017211914

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00099802017211914

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='19' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081205368041992

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='19' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081205368041992

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00046396255493164

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00053882598876953

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00053882598876953

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00035381317138672

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '4' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00092697143554688

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '4' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00092697143554688

select * from injection where  injection_id=7  and office_id= 1 and status=1 
 Execution Time:0.00046205520629883

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013771057128906

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0016520023345947

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0016520023345947

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00032901763916016

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013420581817627

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013420581817627

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099396705627441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099396705627441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099396705627441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099396705627441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011990070343018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099396705627441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011990070343018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011820793151855

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099396705627441

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074315071105957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011990070343018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00049901008605957

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00067496299743652

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00067496299743652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00054383277893066

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00054383277893066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00028491020202637

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0006859302520752

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0006859302520752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005638599395752

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082612037658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071883201599121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00059700012207031

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00034809112548828

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 160 
 Execution Time:0.00035786628723145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 200 
 Execution Time:0.0012171268463135

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00028085708618164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044417381286621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044417381286621

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00037693977355957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024268627166748

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024268627166748

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038981437683105

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00024294853210449

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00025582313537598

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006258487701416

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006258487701416

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059390068054199

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013120174407959

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013120174407959

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='24' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001331090927124

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='24' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001331090927124

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006260871887207

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010628700256348

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010628700256348

select * from ipdcharge where  ipdcharge_id=32  and office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='24' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00058698654174805

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='24' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00058698654174805

select * from ipdcharge where  ipdcharge_id=32  and office_id= 1 and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00089097023010254

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00089097023010254

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00089097023010254

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00026392936706543

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.0001518726348877

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00069904327392578

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00069904327392578

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00044703483581543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040793418884277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040793418884277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001356840133667

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.001356840133667

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024890899658203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011880397796631

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011880397796631

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011880397796631

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00038790702819824

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0006558895111084

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0006558895111084

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016090869903564

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016090869903564

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.000762939453125

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00066590309143066

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00067305564880371

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00067305564880371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036811828613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036811828613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 161 
 Execution Time:0.0003960132598877

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 201 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00075078010559082

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00075078010559082

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00029087066650391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014781951904297

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014781951904297

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00028491020202637

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00087809562683105

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00087809562683105

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00037121772766113

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011160373687744

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011160373687744

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00045394897460938

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011160373687744

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00045394897460938

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00016403198242188

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='23' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015189647674561

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='23' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015189647674561

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.0006401538848877

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 159 
 Execution Time:0.00042891502380371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 199 
 Execution Time:0.0005497932434082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select * from examination where examination_id= '69' and   office_id= '1' 
 Execution Time:0.003216028213501

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 69 
 Execution Time:0.00096702575683594

select * from examination_chargesdetails where  examination_id= '69' 
 Execution Time:0.00078797340393066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070309638977051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070309638977051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055813789367676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010709762573242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010709762573242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010509490966797

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010509490966797

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010509490966797

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00020003318786621

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00065088272094727

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='20' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00065088272094727

select * from ipdcharge where  ipdcharge_id=17  and office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069594383239746

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035500526428223

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0020689964294434

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0020689964294434

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00056314468383789

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00095915794372559

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00095915794372559

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00044989585876465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040912628173828

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013711452484131

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013711452484131

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013577938079834

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0013577938079834

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00083518028259277

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034182071685791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034182071685791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034182071685791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037879943847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034182071685791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037879943847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0023140907287598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013689994812012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034182071685791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037879943847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028889179229736

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021369457244873

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0005040168762207

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00020718574523926

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0046031475067139

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0046031475067139

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00071597099304199

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0045959949493408

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0045959949493408

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.0009620189666748

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0014240741729736

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0014240741729736

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00038719177246094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057482719421387

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 162 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 202 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012869834899902

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='26' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012869834899902

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00054717063903809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036501884460449

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0007941722869873

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0007941722869873

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065779685974121

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065779685974121

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048923492431641

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015058517456055

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015058517456055

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015058517456055

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00066399574279785

select * from ipdcharge where  ipdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00015020370483398

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='28' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00072813034057617

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='28' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00072813034057617

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0007779598236084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0017058849334717

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013370513916016

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013370513916016

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-06' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0013370513916016

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00014901161193848

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='25' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016751289367676

select patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='25' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016751289367676

select * from laser where  laser_id=5  and office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00038886070251465

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00025105476379395


select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021457672119141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021457672119141

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0028669834136963

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021457672119141

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-11' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0055170059204102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085997581481934

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016000270843506

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011129379272461

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00015401840209961


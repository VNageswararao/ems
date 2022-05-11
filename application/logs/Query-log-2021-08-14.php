select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023679733276367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017430782318115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014960765838623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011529922485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011811256408691

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00034809112548828

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012631416320801

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00034809112548828

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012631416320801

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00016999244689941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019600391387939

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019600391387939

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017080307006836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020041465759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00099587440490723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022006034851074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017080307006836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00052380561828613

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00052380561828613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00053215026855469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054788589477539

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00053215026855469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00054788589477539

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00017881393432617


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0084900856018066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021939277648926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0084900856018066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021939277648926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032410621643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0084900856018066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021939277648926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032410621643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0084900856018066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021939277648926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032410621643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0084900856018066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021939277648926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032410621643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047299861907959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026800632476807

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0084900856018066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021939277648926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032410621643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047299861907959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071589946746826

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00031805038452148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.0060439109802246

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00031805038452148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.0060439109802246

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='269' and  office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00061202049255371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033688545227051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063810348510742

select count(*) as cnt from patient_registration where  patient_registration_id= '3456' and  office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '3456' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3456' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062789916992188

select count(*) as cnt from patient_registration where  patient_registration_id= '3456' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3456' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062789916992188

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3456' and  office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0024499893188477

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0024499893188477

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0016021728515625

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00065398216247559

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00065398216247559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062220096588135

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00065398216247559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062220096588135

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3479' and  office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055813789367676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055813789367676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.0010271072387695

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.0010271072387695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068039894104004

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.0010271072387695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068039894104004

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2841' and  office_id= '1' 
 Execution Time:0.0020670890808105

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012080669403076

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012080669403076

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0027952194213867

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00031304359436035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030200481414795

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00031304359436035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030200481414795

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1618' and  office_id= '1' 
 Execution Time:0.00025081634521484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0009310245513916

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0009310245513916

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034523010253906

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.0022139549255371

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.0022139549255371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063381195068359

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.0022139549255371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063381195068359

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3174' and  office_id= '1' 
 Execution Time:0.00088596343994141

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023269653320312

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023269653320312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0037829875946045

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033271312713623

select count(*) as cnt from patient_registration where  patient_registration_id= '3479' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3479' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033271312713623

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3479' and  office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011730194091797

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011730194091797

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056886672973633

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.0004279613494873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2365' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035550594329834

select count(*) as cnt from patient_registration where  patient_registration_id= '2365' and  office_id= '1' 
 Execution Time:0.0004279613494873

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2365' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035550594329834

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2365' and  office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019650459289551

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019650459289551

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0031218528747559

select count(*) as cnt from patient_registration where  patient_registration_id= '3033' and  office_id= '1' 
 Execution Time:0.0008552074432373

select count(*) as cnt from patient_registration where  patient_registration_id= '3033' and  office_id= '1' 
 Execution Time:0.0008552074432373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3033' and  doctors_registration.office_id= '1' 
 Execution Time:0.008307933807373

select count(*) as cnt from patient_registration where  patient_registration_id= '3033' and  office_id= '1' 
 Execution Time:0.0008552074432373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3033' and  doctors_registration.office_id= '1' 
 Execution Time:0.008307933807373

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3033' and  office_id= '1' 
 Execution Time:0.00036811828613281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000885009765625

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000885009765625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064420700073242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00064420700073242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077509880065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077509880065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077509880065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077509880065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010521411895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077509880065918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010099411010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005756139755249

select count(*) as cnt from patient_registration where  patient_registration_id= '3233' and  office_id= '1' 
 Execution Time:0.00092411041259766

select count(*) as cnt from patient_registration where  patient_registration_id= '3233' and  office_id= '1' 
 Execution Time:0.00092411041259766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3233' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061378479003906

select count(*) as cnt from patient_registration where  patient_registration_id= '3233' and  office_id= '1' 
 Execution Time:0.00092411041259766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3233' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061378479003906

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3233' and  office_id= '1' 
 Execution Time:0.0013020038604736

select count(*) as cnt from patient_registration where  patient_registration_id= '2902' and  office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from patient_registration where  patient_registration_id= '2902' and  office_id= '1' 
 Execution Time:0.00034308433532715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2902' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044710636138916

select count(*) as cnt from patient_registration where  patient_registration_id= '2902' and  office_id= '1' 
 Execution Time:0.00034308433532715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2902' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044710636138916

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2902' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056195259094238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040984153747559

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0014569759368896

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0014569759368896

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069208145141602

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0014569759368896

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0069208145141602

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.010643005371094

select count(*) as cnt from patient_registration where  patient_registration_id= '2861' and  office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_registration where  patient_registration_id= '2861' and  office_id= '1' 
 Execution Time:0.00052499771118164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2861' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033028125762939

select count(*) as cnt from patient_registration where  patient_registration_id= '2861' and  office_id= '1' 
 Execution Time:0.00052499771118164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2861' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033028125762939

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2861' and  office_id= '1' 
 Execution Time:0.00025391578674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2861' and  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_registration where  patient_registration_id= '3277' and  office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from patient_registration where  patient_registration_id= '3277' and  office_id= '1' 
 Execution Time:0.00078797340393066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3277' and  doctors_registration.office_id= '1' 
 Execution Time:0.0070259571075439

select count(*) as cnt from patient_registration where  patient_registration_id= '3277' and  office_id= '1' 
 Execution Time:0.00078797340393066

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3277' and  doctors_registration.office_id= '1' 
 Execution Time:0.0070259571075439

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3277' and  office_id= '1' 
 Execution Time:0.0014979839324951

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063681602478027

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063681602478027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from patient_registration where  patient_registration_id= '3369' and  office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_registration where  patient_registration_id= '3369' and  office_id= '1' 
 Execution Time:0.0005190372467041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3369' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062620639801025

select count(*) as cnt from patient_registration where  patient_registration_id= '3369' and  office_id= '1' 
 Execution Time:0.0005190372467041

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3369' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062620639801025

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3369' and  office_id= '1' 
 Execution Time:0.0018868446350098

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004580020904541

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041389465332031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092098712921143

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092098712921143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092098712921143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029358863830566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092098712921143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029358863830566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092098712921143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029358863830566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025119781494141

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00031805038452148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034229755401611

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00031805038452148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034229755401611

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3174' and  office_id= '1' 
 Execution Time:0.00023508071899414

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.016352891921997

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.016352891921997

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031859874725342

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00084710121154785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078158378601074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078158378601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078158378601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078158378601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078158378601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005347728729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076007843017578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005347728729248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042588710784912

select count(*) as cnt from patient_registration where  patient_registration_id= '3492' and  office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from patient_registration where  patient_registration_id= '3492' and  office_id= '1' 
 Execution Time:0.00042605400085449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3492' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032069683074951

select count(*) as cnt from patient_registration where  patient_registration_id= '3492' and  office_id= '1' 
 Execution Time:0.00042605400085449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3492' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032069683074951

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3492' and  office_id= '1' 
 Execution Time:0.00019383430480957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075888633728027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075888633728027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096702575683594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096702575683594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_registration where  patient_registration_id= '3229' and  office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_registration where  patient_registration_id= '3229' and  office_id= '1' 
 Execution Time:0.0003669261932373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3229' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030179023742676

select count(*) as cnt from patient_registration where  patient_registration_id= '3229' and  office_id= '1' 
 Execution Time:0.0003669261932373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3229' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030179023742676

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3229' and  office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from patient_registration where  patient_registration_id= '3309' and  office_id= '1' 
 Execution Time:0.00047183036804199

select count(*) as cnt from patient_registration where  patient_registration_id= '3309' and  office_id= '1' 
 Execution Time:0.00047183036804199

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3309' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052700042724609

select count(*) as cnt from patient_registration where  patient_registration_id= '3309' and  office_id= '1' 
 Execution Time:0.00047183036804199

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3309' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052700042724609

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3309' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022070407867432

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022070407867432

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004119873046875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056600570678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039880275726318

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00078678131103516

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00078678131103516

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007479190826416

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007479190826416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002896785736084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002896785736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030429363250732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002896785736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030429363250732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010659694671631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002896785736084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030429363250732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010659694671631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069839954376221

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052499771118164

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061392784118652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017905235290527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00027680397033691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043361186981201

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00039410591125488

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034284591674805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061891078948975

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052094459533691

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033116340637207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00335693359375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00335693359375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090408325195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056431293487549

select count(*) as cnt from patient_registration where  patient_registration_id= '3311' and  office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from patient_registration where  patient_registration_id= '3311' and  office_id= '1' 
 Execution Time:0.00035190582275391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3311' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046789646148682

select count(*) as cnt from patient_registration where  patient_registration_id= '3311' and  office_id= '1' 
 Execution Time:0.00035190582275391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3311' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046789646148682

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3311' and  office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040817260742188

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057291984558105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079703330993652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079703330993652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006558895111084

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045180320739746

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045180320739746

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00017309188842773

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00034117698669434

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062718391418457

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0050480365753174

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0050480365753174

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071907043457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026106834411621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060207843780518

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006558895111084

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012209415435791

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012209415435791

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056929588317871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056929588317871

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045320987701416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056929588317871

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045320987701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041220188140869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056929588317871

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045320987701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041220188140869

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011591911315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0084249973297119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049569606781006

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031840801239014

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056929588317871

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045320987701416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041220188140869

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011591911315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083239078521729

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097084045410156

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097084045410156

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088109970092773

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003856897354126

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003856897354126

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038280487060547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045204162597656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067589282989502

select count(*) as cnt from patient_registration where  patient_registration_id= '3461' and  office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_registration where  patient_registration_id= '3461' and  office_id= '1' 
 Execution Time:0.00052809715270996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3461' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049200057983398

select count(*) as cnt from patient_registration where  patient_registration_id= '3461' and  office_id= '1' 
 Execution Time:0.00052809715270996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3461' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049200057983398

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3461' and  office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039291381835938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045390129089355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045390129089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045390129089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0070271492004395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045390129089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0070271492004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045390129089355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0070271492004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00058913230895996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.0060360431671143

select count(*) as cnt from patient_registration where  patient_registration_id= '269' and  office_id= '1' 
 Execution Time:0.00058913230895996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='269' and  doctors_registration.office_id= '1' 
 Execution Time:0.0060360431671143

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='269' and  office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001079797744751

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.001366138458252

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064759254455566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064759254455566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064759254455566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064759254455566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064759254455566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031440258026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053339004516602

select count(*) as cnt from patient_registration where  patient_registration_id= '3494' and  office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_registration where  patient_registration_id= '3494' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3494' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066730976104736

select count(*) as cnt from patient_registration where  patient_registration_id= '3494' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3494' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066730976104736

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3494' and  office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050592422485352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015115737915039

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038659572601318

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093660354614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093660354614258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093660354614258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093660354614258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047478675842285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047478675842285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047478675842285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047478675842285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047478675842285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034713745117188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066390037536621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028378963470459

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0028378963470459

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0019140243530273

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00053715705871582

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00053715705871582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048370361328125

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00053715705871582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048370361328125

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3101' and  office_id= '1' 
 Execution Time:0.0026199817657471

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057401657104492

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057401657104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016531944274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057401657104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016531944274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057401657104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016531944274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057401657104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016531944274902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070619583129883

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044591426849365

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081706047058105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030210018157959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030210018157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038168430328369

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030210018157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038168430328369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030210018157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038168430328369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002612829208374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025038719177246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030210018157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038168430328369

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002612829208374

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050861835479736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004727840423584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00043511390686035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.005666971206665

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00043511390686035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.005666971206665

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1618' and  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011060237884521

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011060237884521

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044822692871094

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072758197784424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072758197784424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072758197784424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072758197784424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072758197784424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050511360168457

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056815147399902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056815147399902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075817108154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086188316345215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069284439086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024080276489258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075817108154297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062458515167236

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039470195770264

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039470195770264

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031619071960449

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043988227844238

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043988227844238

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047397613525391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080718994140625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032711029052734

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060415267944336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060415267944336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060415267944336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011870861053467

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060415267944336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081706047058105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081589221954346

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029327869415283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029327869415283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030391216278076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029327869415283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030391216278076

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029327869415283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030391216278076

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029327869415283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030391216278076

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023770332336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037581920623779

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039591789245605

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029327869415283

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030391216278076

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034260749816895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023770332336426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093879699707031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021560192108154

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021560192108154

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049495697021484

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002662181854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002662181854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002662181854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002662181854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014398097991943

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002662181854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034909248352051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014398097991943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010629177093506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098559856414795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098559856414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061609745025635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098559856414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061609745025635

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0045700073242188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098559856414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061609745025635

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0045700073242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0098559856414795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0061609745025635

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0045700073242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018959045410156

select count(*) as cnt from patient_registration where  patient_registration_id= '3528' and  office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from patient_registration where  patient_registration_id= '3528' and  office_id= '1' 
 Execution Time:0.00031685829162598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3528' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037009716033936

select count(*) as cnt from patient_registration where  patient_registration_id= '3528' and  office_id= '1' 
 Execution Time:0.00031685829162598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3528' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037009716033936

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3528' and  office_id= '1' 
 Execution Time:0.00086212158203125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016100406646729

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016100406646729

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008540153503418

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073399543762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073399543762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073399543762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073399543762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073399543762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073719024658203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073695182800293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00056099891662598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033659934997559

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00056099891662598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033659934997559

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2571' and  office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042390823364258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00565505027771

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2571' and  doctors_registration.office_id= '1' 
 Execution Time:0.003108024597168

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00032997131347656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2571' and  doctors_registration.office_id= '1' 
 Execution Time:0.003108024597168

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2571' and  office_id= '1' 
 Execution Time:0.00028586387634277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048494338989258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086979866027832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086979866027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086979866027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086979866027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086979866027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051989555358887

select count(*) as cnt from patient_registration where  patient_registration_id= '2571' and  office_id= '1' 
 Execution Time:0.00033402442932129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051989555358887

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2571' and  office_id= '1' 
 Execution Time:0.00038719177246094

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017449855804443

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017449855804443

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00048995018005371

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004727840423584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004727840423584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004727840423584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004727840423584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004727840423584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015468597412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016179084777832

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00152587890625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014629364013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015468597412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059609413146973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_registration where  patient_registration_id= '3461' and  office_id= '1' 
 Execution Time:0.00040578842163086

select count(*) as cnt from patient_registration where  patient_registration_id= '3461' and  office_id= '1' 
 Execution Time:0.00040578842163086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3461' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035779476165771

select count(*) as cnt from patient_registration where  patient_registration_id= '3461' and  office_id= '1' 
 Execution Time:0.00040578842163086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3461' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035779476165771

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3461' and  office_id= '1' 
 Execution Time:0.00028181076049805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078415870666504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00030398368835449

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041952133178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041952133178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041952133178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041952133178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041952133178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022578239440918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072741508483887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072741508483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072741508483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072741508483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072741508483887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_registration where  patient_registration_id= '3524' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '3524' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3524' and  doctors_registration.office_id= '1' 
 Execution Time:0.00465989112854

select count(*) as cnt from patient_registration where  patient_registration_id= '3524' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3524' and  doctors_registration.office_id= '1' 
 Execution Time:0.00465989112854

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3524' and  office_id= '1' 
 Execution Time:0.00091099739074707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029587745666504

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043900012969971

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043900012969971

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043900012969971

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043900012969971

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043900012969971

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016903877258301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041079521179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039520263671875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001154899597168

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001154899597168

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000885009765625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000885009765625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001530647277832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025320053100586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043849945068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034308433532715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074131488800049

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004490852355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004490852355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004490852355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004490852355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004490852355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select count(*) as cnt from patient_registration where  patient_registration_id= '3523' and  office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_registration where  patient_registration_id= '3523' and  office_id= '1' 
 Execution Time:0.00072503089904785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3523' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046570301055908

select count(*) as cnt from patient_registration where  patient_registration_id= '3523' and  office_id= '1' 
 Execution Time:0.00072503089904785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3523' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046570301055908

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3523' and  office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011310577392578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011310577392578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00066709518432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065791606903076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065791606903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065791606903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065791606903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065791606903076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046086311340332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061399936676025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043971538543701

select count(*) as cnt from patient_registration where  patient_registration_id= '2792' and  office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_registration where  patient_registration_id= '2792' and  office_id= '1' 
 Execution Time:0.00054597854614258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2792' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047731399536133

select count(*) as cnt from patient_registration where  patient_registration_id= '2792' and  office_id= '1' 
 Execution Time:0.00054597854614258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2792' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047731399536133

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2792' and  office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050878524780273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063896179199219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062808990478516

select count(*) as cnt from patient_registration where  patient_registration_id= '3253' and  office_id= '1' 
 Execution Time:0.0035719871520996

select count(*) as cnt from patient_registration where  patient_registration_id= '3253' and  office_id= '1' 
 Execution Time:0.0035719871520996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3253' and  doctors_registration.office_id= '1' 
 Execution Time:0.0070319175720215

select count(*) as cnt from patient_registration where  patient_registration_id= '3253' and  office_id= '1' 
 Execution Time:0.0035719871520996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3253' and  doctors_registration.office_id= '1' 
 Execution Time:0.0070319175720215

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3253' and  office_id= '1' 
 Execution Time:0.00054621696472168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051150321960449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013198852539062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030930042266846

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00040602684020996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030930042266846

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2841' and  office_id= '1' 
 Execution Time:0.00023794174194336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011630058288574

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011630058288574

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067028999328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067028999328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067028999328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067028999328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067028999328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054311752319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054311752319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054311752319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00094485282897949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054311752319336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054571628570557

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00042486190795898

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015058517456055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064549446105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063798427581787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063798427581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012648105621338

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063798427581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012648105621338

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063798427581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012648105621338

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063798427581787

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012648105621338

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select count(*) as cnt from patient_registration where  patient_registration_id= '3527' and  office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from patient_registration where  patient_registration_id= '3527' and  office_id= '1' 
 Execution Time:0.00047397613525391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3527' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053448677062988

select count(*) as cnt from patient_registration where  patient_registration_id= '3527' and  office_id= '1' 
 Execution Time:0.00047397613525391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3527' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053448677062988

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3527' and  office_id= '1' 
 Execution Time:0.0015499591827393

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074386596679688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074386596679688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036883354187012

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0029749870300293

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00064301490783691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073270797729492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043549537658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027410984039307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027410984039307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027410984039307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027410984039307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043399333953857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027410984039307

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0043399333953857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010010957717896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066461563110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044569969177246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075199604034424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075199604034424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075199604034424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075199604034424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075199604034424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from patient_registration where  patient_registration_id= '3531' and  office_id= '1' 
 Execution Time:0.003680944442749

select count(*) as cnt from patient_registration where  patient_registration_id= '3531' and  office_id= '1' 
 Execution Time:0.003680944442749

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3531' and  doctors_registration.office_id= '1' 
 Execution Time:0.005763053894043

select count(*) as cnt from patient_registration where  patient_registration_id= '3531' and  office_id= '1' 
 Execution Time:0.003680944442749

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3531' and  doctors_registration.office_id= '1' 
 Execution Time:0.005763053894043

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3531' and  office_id= '1' 
 Execution Time:0.003748893737793

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082802772521973

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082802772521973

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015283823013306

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015283823013306

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015283823013306

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015283823013306

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0045831203460693

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015283823013306

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036799907684326

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014138221740723

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0045831203460693

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002708911895752

select count(*) as cnt from patient_registration where  patient_registration_id= '3533' and  office_id= '1' 
 Execution Time:0.0065228939056396

select count(*) as cnt from patient_registration where  patient_registration_id= '3533' and  office_id= '1' 
 Execution Time:0.0065228939056396

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3533' and  doctors_registration.office_id= '1' 
 Execution Time:0.0070359706878662

select count(*) as cnt from patient_registration where  patient_registration_id= '3533' and  office_id= '1' 
 Execution Time:0.0065228939056396

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3533' and  doctors_registration.office_id= '1' 
 Execution Time:0.0070359706878662

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3533' and  office_id= '1' 
 Execution Time:0.0010139942169189

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081992149353027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0053231716156006

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.002079963684082

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0011470317840576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069649219512939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069649219512939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069649219512939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069649219512939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069649219512939

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015727996826172

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015727996826172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015727996826172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015727996826172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015727996826172

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select count(*) as cnt from patient_registration where  patient_registration_id= '3530' and  office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_registration where  patient_registration_id= '3530' and  office_id= '1' 
 Execution Time:0.00052404403686523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3530' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056579113006592

select count(*) as cnt from patient_registration where  patient_registration_id= '3530' and  office_id= '1' 
 Execution Time:0.00052404403686523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3530' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056579113006592

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3530' and  office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055503845214844

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068659782409668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068659782409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068659782409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068659782409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068659782409668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040459632873535

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040459632873535

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.0012731552124023

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056860446929932

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056860446929932

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3101' and  office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075721740722656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075721740722656

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059521198272705

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059521198272705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059521198272705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067877769470215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059521198272705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067877769470215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059521198272705

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067877769470215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085186958312988

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049686431884766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086307525634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052640438079834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077099800109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077099800109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003201961517334

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-16' and '2021-12-16' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=3 
 Execution Time:0.0035650730133057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014810562133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030269622802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033783912658691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014810562133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067789554595947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067770481109619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067770481109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067770481109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067770481109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067770481109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085282325744629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019409656524658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019409656524658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019409656524658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015079975128174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019409656524658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015079975128174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019409656524658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015079975128174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019409656524658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015079975128174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037329196929932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019409656524658

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015079975128174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00341796875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037329196929932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071699619293213

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040984153747559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040984153747559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040984153747559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010846138000488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040984153747559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040581226348877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034689903259277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044703483581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075309276580811

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00032806396484375

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070595741271973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045490264892578

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0010168552398682

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0010168552398682

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033879280090332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033879280090332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019288063049316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063128471374512

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069499015808105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069499015808105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00081992149353027

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00081992149353027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061202049255371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059971809387207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036120414733887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036120414733887

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028400421142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002129077911377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085761547088623

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038886070251465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018787384033203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006568431854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006568431854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006568431854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006568431854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011348724365234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006568431854248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061488151550293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059459209442139

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045013427734375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073885917663574

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048995018005371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062360763549805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047802925109863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_registration where  patient_registration_id= '3485' and  office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from patient_registration where  patient_registration_id= '3485' and  office_id= '1' 
 Execution Time:0.00043916702270508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3485' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030720233917236

select count(*) as cnt from patient_registration where  patient_registration_id= '3485' and  office_id= '1' 
 Execution Time:0.00043916702270508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3485' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030720233917236

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3485' and  office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00041508674621582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068187713623047

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068187713623047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0023539066314697

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0023539066314697

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086784362792969

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031440258026123

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031440258026123

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0030338764190674

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0045888423919678

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0045888423919678

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0017061233520508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016331672668457

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016331672668457

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071883201599121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016379356384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032329559326172

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037829875946045

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071883201599121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073230266571045

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013494491577148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013494491577148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013494491577148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013494491577148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028896331787109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037310123443604

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037310123443604

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038609504699707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023820400238037

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023820400238037

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00388503074646

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0025269985198975

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0025269985198975

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012631416320801

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.015964031219482

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.015964031219482

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011370182037354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025720596313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011370182037354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007390022277832

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052905082702637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052905082702637

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020828247070312

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0020828247070312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072240829467773

select count(*) as cnt from patient_registration where  patient_registration_id= '1914' and  office_id= '1' 
 Execution Time:0.00081801414489746

select count(*) as cnt from patient_registration where  patient_registration_id= '1914' and  office_id= '1' 
 Execution Time:0.00081801414489746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1914' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061450004577637

select count(*) as cnt from patient_registration where  patient_registration_id= '1914' and  office_id= '1' 
 Execution Time:0.00081801414489746

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1914' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061450004577637

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1914' and  office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028660297393799

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028660297393799

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0058250427246094

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034670829772949

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034670829772949

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034060478210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0095698833465576

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065517425537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069999694824219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076138973236084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027279853820801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0027279853820801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00341796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021710395812988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016441345214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065302848815918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094795227050781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077481269836426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093197822570801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093197822570801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006108283996582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022819042205811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028040409088135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028040409088135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028040409088135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028040409088135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028040409088135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028040409088135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027539730072021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028040409088135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037949085235596

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027539730072021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073449611663818

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078797340393066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007011890411377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050630569458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064890384674072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064890384674072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011085033416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064890384674072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011085033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064890384674072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011085033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064890384674072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.011085033416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0016310214996338

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064918994903564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064918994903564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064918994903564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064918994903564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064918994903564

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_registration where  patient_registration_id= '3546' and  office_id= '1' 
 Execution Time:0.00057792663574219

select count(*) as cnt from patient_registration where  patient_registration_id= '3546' and  office_id= '1' 
 Execution Time:0.00057792663574219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3546' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054490566253662

select count(*) as cnt from patient_registration where  patient_registration_id= '3546' and  office_id= '1' 
 Execution Time:0.00057792663574219

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3546' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054490566253662

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3546' and  office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024669170379639

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024669170379639

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041952133178711

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0021810531616211

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0021810531616211

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0019850730895996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010261535644531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010261535644531

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006209135055542

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071191787719727

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071191787719727

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036120414733887

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041508674621582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041508674621582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023317337036133

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00089406967163086

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00089406967163086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047707557678223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039799213409424

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024018287658691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024018287658691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027849674224854

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063014030456543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010411739349365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010411739349365

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010411739349365

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013527870178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010411739349365

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013527870178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026130676269531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010411739349365

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013527870178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028109550476074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066189765930176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076620578765869

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.0010840892791748

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.0010840892791748

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3467' and  doctors_registration.office_id= '1' 
 Execution Time:0.010504007339478

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.0010840892791748

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3467' and  doctors_registration.office_id= '1' 
 Execution Time:0.010504007339478

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3467' and  office_id= '1' 
 Execution Time:0.0024690628051758

select count(*) as cnt from patient_registration where  patient_registration_id= '3466' and  office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from patient_registration where  patient_registration_id= '3466' and  office_id= '1' 
 Execution Time:0.00034117698669434

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3466' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029430389404297

select count(*) as cnt from patient_registration where  patient_registration_id= '3466' and  office_id= '1' 
 Execution Time:0.00034117698669434

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3466' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029430389404297

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3466' and  office_id= '1' 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005950927734375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043010711669922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052051544189453

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.00072979927062988

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.00072979927062988

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3467' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032620429992676

select count(*) as cnt from patient_registration where  patient_registration_id= '3467' and  office_id= '1' 
 Execution Time:0.00072979927062988

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3467' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032620429992676

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3467' and  office_id= '1' 
 Execution Time:0.0032789707183838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041768550872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00029206275939941

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3542' and  doctors_registration.office_id= '1' 
 Execution Time:0.004504919052124

select count(*) as cnt from patient_registration where  patient_registration_id= '3542' and  office_id= '1' 
 Execution Time:0.00029206275939941

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3542' and  doctors_registration.office_id= '1' 
 Execution Time:0.004504919052124

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3542' and  office_id= '1' 
 Execution Time:0.00035500526428223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011529922485352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011529922485352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014259815216064

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0064241886138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087771415710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087771415710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087771415710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087771415710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087771415710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040230751037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0044190883636475

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select count(*) as cnt from patient_registration where  patient_registration_id= '3545' and  office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from patient_registration where  patient_registration_id= '3545' and  office_id= '1' 
 Execution Time:0.00049614906311035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3545' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032169818878174

select count(*) as cnt from patient_registration where  patient_registration_id= '3545' and  office_id= '1' 
 Execution Time:0.00049614906311035

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3545' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032169818878174

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3545' and  office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007021427154541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007021427154541

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056600570678711

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00078511238098145

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00096893310546875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045039653778076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045039653778076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045039653778076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.006472110748291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045039653778076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.006472110748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045039653778076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.006472110748291

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007479190826416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053489208221436

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022792816162109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079107284545898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090312957763672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064420700073242

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065016746520996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065016746520996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027239322662354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024170875549316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027239322662354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067248344421387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078849792480469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078849792480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078849792480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078849792480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078849792480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094890594482422

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select count(*) as cnt from patient_registration where  patient_registration_id= '3552' and  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_registration where  patient_registration_id= '3552' and  office_id= '1' 
 Execution Time:0.00041699409484863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3552' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048420429229736

select count(*) as cnt from patient_registration where  patient_registration_id= '3552' and  office_id= '1' 
 Execution Time:0.00041699409484863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3552' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048420429229736

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3552' and  office_id= '1' 
 Execution Time:0.003209114074707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010340213775635

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010340213775635

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055098533630371

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077431201934814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077431201934814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077431201934814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077431201934814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077431201934814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010712146759033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010712146759033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010712146759033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010712146759033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044989585876465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010712146759033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044989585876465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010712146759033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044989585876465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017070770263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010712146759033

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044989585876465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007929801940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062699317932129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0051498413085938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0098929405212402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060582160949707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060582160949707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041913986206055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033528804779053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033528804779053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033528804779053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033528804779053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013129711151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021560192108154

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033528804779053

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017900466918945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013129711151123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089449882507324

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063159465789795

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063159465789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063159465789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063159465789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063159465789795

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042262077331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042262077331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042262077331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042262077331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040817260742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042262077331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040817260742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051779747009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026869773864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066399574279785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026869773864746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068769454956055

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029683113098145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039999485015869

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052976608276367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052976608276367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052976608276367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052976608276367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052976608276367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052976608276367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020778179168701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052976608276367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020778179168701

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043058395385742

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00031495094299316

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014686584472656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023508071899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039839744567871

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028085708618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065150260925293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060105323791504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044920444488525

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046000480651855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045909881591797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045909881591797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045909881591797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045909881591797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045909881591797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070595741271973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select count(*) as cnt from patient_registration where  patient_registration_id= '3555' and  office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '3555' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3555' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033071041107178

select count(*) as cnt from patient_registration where  patient_registration_id= '3555' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3555' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033071041107178

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3555' and  office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072479248046875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072479248046875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029611587524414

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00063014030456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045850276947021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045850276947021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045850276947021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045850276947021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045850276947021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098919868469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018801689147949

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011029243469238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098919868469238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071079730987549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093197822570801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070030689239502

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049114227294922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049114227294922

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0011157989501953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056982040405273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056982040405273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052618980407715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040602684020996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017788410186768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009009838104248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013572931289673

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075483322143555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055503845214844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075483322143555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068638324737549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020194053649902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001988410949707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060629844665527

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048089027404785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070838928222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012875080108643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012875080108643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012875080108643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012875080108643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029280185699463

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011551380157471

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-16' and  '2021-12-16' and  billing_master.office_id= 1        
 Execution Time:0.0024948120117188

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-16' and  '2021-12-16' and  billing_master.office_id= 1        
 Execution Time:0.0024948120117188

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-16' and '2021-12-16' and  patient_registration.office_id= 1      
 Execution Time:0.0060949325561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053286552429199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080394744873047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074880123138428

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080204010009766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080204010009766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070786476135254

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070786476135254

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026099681854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029087066650391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071799755096436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076839923858643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076839923858643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076839923858643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076839923858643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076839923858643

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016448497772217

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090384483337402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092196464538574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041940212249756

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064706802368164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049901008605957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005640983581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057718753814697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038814544677734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062894821166992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064399242401123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024487972259521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024487972259521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021898746490479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024487972259521

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0021898746490479

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020139217376709


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027060508728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027060508728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027060508728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027060508728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027060508728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040411949157715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026850700378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026171207427979

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028820037841797

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027060508728027

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029211044311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040411949157715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.004382848739624

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00061202049255371

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00058293342590332

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00058293342590332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047492980957031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select count(*) as cnt from source where  name = 'YOUTUBE' and office_id= '1' 
 Execution Time:0.0012497901916504

select count(*) as cnt from source where  name = 'CAMP PATIENT REFERENCE' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from source where  name = 'FACE BOOK' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from source where  name = 'PAPER ADD' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from source where  name = 'TV ADD' and office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from source where  name = 'OTHERS' and office_id= '1' 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011029243469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011029243469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011029243469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011029243469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019919872283936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011029243469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019919872283936

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012860298156738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015249252319336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014681816101074

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011029243469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019919872283936

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012860298156738

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013000965118408

select count(*) as cnt from referral_master where  name = 'DR ABINAYA MD' and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from referral_master where  name = 'DR JEGADESH' and office_id= '1' 
 Execution Time:0.0072028636932373

select count(*) as cnt from referral_master where  name = 'DR GOWSIK' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from referral_master where  name = 'DR SAKTHIVEL' and office_id= '1' 
 Execution Time:0.00083398818969727

select count(*) as cnt from referral_master where  name = 'DR ASWINTH' and office_id= '1' 
 Execution Time:0.0006871223449707

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0036070346832275

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00079488754272461

select count(*) as cnt from medicine_instruction where  name = '4 Times a day' and office_id= '1' 
 Execution Time:0.0010831356048584

select count(*) as cnt from medicine_instruction where  name = '1 Time a day' and office_id= '1' 
 Execution Time:0.00039219856262207

select count(*) as cnt from medicine_instruction where  name = '3 Times a day' and office_id= '1' 
 Execution Time:0.00088715553283691

select count(*) as cnt from medicine_instruction where  name = '6 Times a day' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from medicine_instruction where  name = '8 Times a day' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from medicine_instruction where  name = '1-1-1' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from medicine_instruction where  name = '1-0-0' and office_id= '1' 
 Execution Time:0.00047516822814941

select count(*) as cnt from medicine_instruction where  name = 'Once in a day @ night' and office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from medicine_instruction where  name = '@-Morning &amp; @-Night' and office_id= '1' 
 Execution Time:0.00040102005004883

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from medicine where  name = 'MYOPIN' and office_id= '1' 
 Execution Time:0.00058817863464355

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select count(*) as cnt from medicine where  name = 'FLURGAT' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from medicine where  name = 'NEPAZE' and office_id= '1' 
 Execution Time:0.00063705444335938

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select count(*) as cnt from medicine where  name = 'CYCLOPENT EYE DROP' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from medicine where  name = 'ART EYE DROPS' and office_id= '1' 
 Execution Time:0.00054311752319336

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from medicine where  name = 'REFRESH' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from medicine where  name = 'NEYPAC EYEDROPS' and office_id= '1' 
 Execution Time:0.00070405006408691

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.0018458366394043

select count(*) as cnt from medicine where  name = 'TOBRAMYCIN' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from medicine where  name = 'CD' and office_id= '1' 
 Execution Time:0.00071406364440918

select count(*) as cnt from medicine where  name = 'ZOBRA E/O' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from medicine where  name = 'LACRYL PF GEL' and office_id= '1' 
 Execution Time:0.00056600570678711

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from medicine where  name = '4 QUIN EYE OINTMENT' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from medicine where  name = 'Eyemist' and office_id= '1' 
 Execution Time:0.00069403648376465

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from medicine where  name = 'ONEZINE-10MG' and office_id= '1' 
 Execution Time:0.0020110607147217

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select count(*) as cnt from medicine_instruction where  name = '1-0-0' and office_id= '1' 
 Execution Time:0.00049304962158203

select * from medicine_instruction where medicine_instruction_id='13' and office_id= '1' 
 Execution Time:0.0054020881652832

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0017352104187012

select * from medicine_instruction where medicine_instruction_id='9' and office_id= '1' 
 Execution Time:0.00052499771118164

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select count(*) as cnt from medicine where  name = 'ACHE-P' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from medicine where  name = 'OFLOMINT-400MG' and office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from medicine where  name = 'PANMINT-40MG' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from medicine where  name = 'ASTA1 TAB' and office_id= '1' 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012228488922119

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0004270076751709

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.0012290477752686

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.0012290477752686

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032169818878174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032169818878174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032169818878174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041220188140869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032169818878174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041220188140869

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027351379394531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032169818878174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041220188140869

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027351379394531

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00086593627929688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032169818878174

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013079643249512

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041220188140869

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027351379394531

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011060237884521

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00056910514831543

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00056910514831543

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059294700622559

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059294700622559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0014050006866455

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0014050006866455

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00066304206848145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029182434082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030422210693359

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029182434082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00054192543029785

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00040507316589355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054693222045898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00084090232849121

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.00032806396484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099420547485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099420547485352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0099420547485352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0029881000518799

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00081515312194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.0005500316619873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select * from examination where examination_id= '55' and   office_id= '1' 
 Execution Time:0.0042870044708252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038478374481201

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 55 
 Execution Time:0.0049130916595459

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.0035879611968994

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002680778503418

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002680778503418

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097203254699707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0025019645690918

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='22' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052905082702637

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='25' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078105926513672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057315826416016

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='23' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075101852416992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='21' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053095817565918

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0032699108123779

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0012989044189453

select count(*) as cnt from investigation where  name = 'OCT( One Eye)' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from investigation where  name = 'Colour Fundus Photo' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from investigation where  name = 'Slit Lamp Photo' and office_id= '1' 
 Execution Time:0.00046610832214355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select count(*) as cnt from department where  name = 'Glaucoma' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from department where  name = 'OCULOPLASTY' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from department where  name = 'PAEDIATRIC' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from department where  name = 'SQUINT' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from department where  name = 'CORNEA' and office_id= '1' 
 Execution Time:0.00067710876464844

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select count(*) as cnt from investigation where  name = 'Visual  Fields (One Eye)' and office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from investigation where  name = 'Visual  Fields  (Both Eye)' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from investigation where  name = 'SIRUS Scan' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from investigation where  name = 'B-Scan (One Eye)' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from investigation where  name = 'B-Scan (Both Eye)' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from investigation where  name = 'OCT( One Eye)' and office_id= '1' 
 Execution Time:0.001856803894043

select count(*) as cnt from investigation where  name = 'OCT +FFA' and office_id= '1' 
 Execution Time:0.00041794776916504

select count(*) as cnt from investigation where  name = 'Appalanation Tonometer (AT)' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from investigation where  name = 'Angle Evaluation' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from investigation where  name = 'COT Study' and office_id= '1' 
 Execution Time:0.00042819976806641

select count(*) as cnt from investigation where  name = 'Pachymetry' and office_id= '1' 
 Execution Time:0.0020749568939209

select count(*) as cnt from investigation where  name = 'Schimers  Test' and office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from investigation where  name = 'TRYE' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from investigation where  name = 'Contrast Sensitivity' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from investigation where  name = 'Diplopia Chart' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from investigation where  name = 'PAM Test' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from investigation where  name = 'Colour Vision' and office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from investigation where  name = 'Specular Microscopy' and office_id= '1' 
 Execution Time:0.00078487396240234

select count(*) as cnt from investigation where  name = 'Syringing' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from investigation where  name = 'Amsler Chart' and office_id= '1' 
 Execution Time:0.00042104721069336

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select count(*) as cnt from ipdcharge where  name = 'PHACO WITH FOLDABLE IOL ASPHERIC' and office_id= '1' 
 Execution Time:0.00072407722473145

select count(*) as cnt from ipdcharge where  name = 'SICS  Rigid A' and office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from ipdcharge where  name = 'SICS - Foldable' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from ipdcharge where  name = 'Phaco - Budget' and office_id= '1' 
 Execution Time:0.0006721019744873

select count(*) as cnt from ipdcharge where  name = 'Phaco Foldable Imported' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from ipdcharge where  name = 'Phaco Foldable Toric Indian' and office_id= '1' 
 Execution Time:0.00071406364440918

select count(*) as cnt from ipdcharge where  name = 'Phaco Foldable  Toric Imported' and office_id= '1' 
 Execution Time:0.00049519538879395

select count(*) as cnt from ipdcharge where  name = 'Phaco Foldable  Multifocal Indian' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from ipdcharge where  name = 'Phaco Foldable  Multifocal Imported' and office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from ipdcharge where  name = 'Phaco Foldable Indian Multifocal Toric' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from ipdcharge where  name = 'Phaco Foldable  Imported Multifocal Toric' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from ipdcharge where  name = 'GIPSA - Phaco with hyrophobic aspheric lens' and office_id= '1' 
 Execution Time:0.00081706047058105

select count(*) as cnt from ipdcharge where  name = 'GIPSA - Phaco with premium deluxe IOL' and office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from ipdcharge where  name = 'GIPSA - Phaco with toric IOL' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from ipdcharge where  name = 'CM0455 : PAEDIATRIC CATARACT SURGERY (PHACO EMULSIFICATION IOL/SICS IOL)' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from ipdcharge where  name = 'Victrectomy' and office_id= '1' 
 Execution Time:0.00095391273498535

select count(*) as cnt from ipdcharge where  name = 'Victrectomy B' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from ipdcharge where  name = 'Victrectomy C (Sutureless)' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from ipdcharge where  name = 'VIT+MP+EL+C3F8 (Suterless) +IOL  B' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from ipdcharge where  name = 'VIT+MP+EL+C3F8 (Suterless) +IOL  C' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from ipdcharge where  name = 'Buckle Removel' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from ipdcharge where  name = 'SOR Additional  Procedure' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from ipdcharge where  name = 'CM0444 : VITRECTOMY - MEMBRANE PEELING- ENDOLASER,SILICON OIL OR GAS' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from ipdcharge where  name = 'Silicon Oil Removal' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from ipdcharge where  name = 'Silicon Oil Removal + IOL' and office_id= '1' 
 Execution Time:0.00047206878662109

select count(*) as cnt from ipdcharge where  name = 'VIT+MP+EL+C3F8 (Suterless) +IOL  A' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from ipdcharge where  name = 'Retinal Detachment Scleral Buckling' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from ipdcharge where  name = 'CM0447 : SCLERAL BUCKLE FOR RETINAL DETACHMENT' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from ipdcharge where  name = 'CM0443 :VITRECTOMY ANTERIOR' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from ipdcharge where  name = 'CM0442 : REMOVAL OF SILICON OIL OR GAS' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from ipdcharge where  name = 'GIPSA - Vitrectomy Sutureless' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from laser where  name = 'YAG CAPSULOTOMY' and office_id= '1' 
 Execution Time:0.00054812431335449

select count(*) as cnt from laser where  name = 'SIT LASER(BOTH EYE)' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from laser where  name = 'SIT LASERONE EYE)' and office_id= '1' 
 Execution Time:0.0011501312255859

select count(*) as cnt from laser where  name = 'PRP LASER(BOTH EYES)' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from laser where  name = 'PRP LASER(BOTH EYES)' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from laser where  name = 'PRP LASER(ONE EYE)(ONE SITTIN)' and office_id= '1' 
 Execution Time:0.0016219615936279

select count(*) as cnt from laser where  name = 'PRP LASER(ONE EYE)(ONE SITTIN)' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from laser where  name = 'BARRAGE LASER(BOTH EYE)' and office_id= '1' 
 Execution Time:0.0016510486602783

select count(*) as cnt from laser where  name = 'BARRAGE LASER(ONE EYE)' and office_id= '1' 
 Execution Time:0.0034010410308838

select count(*) as cnt from laser where  name = 'FOCAL LASER(BOTH EYE)' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from laser where  name = 'FOCAL LASER(ONE EYE)' and office_id= '1' 
 Execution Time:0.00057411193847656

select count(*) as cnt from laser where  name = 'CMS-PRP LASER' and office_id= '1' 
 Execution Time:0.00067305564880371

select count(*) as cnt from injection where  name = 'IVTA -Inj A' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from injection where  name = 'IVTA -Inj B' and office_id= '1' 
 Execution Time:0.00067687034606934

select count(*) as cnt from injection where  name = 'Avastin Inj A' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from injection where  name = 'Avastin Inj B' and office_id= '1' 
 Execution Time:0.00079202651977539

select count(*) as cnt from injection where  name = 'Avastin Inj C' and office_id= '1' 
 Execution Time:0.0024740695953369

select count(*) as cnt from injection where  name = 'Razumab Inj A' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from injection where  name = 'Razumab Inj B' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from injection where  name = 'Acentrix  Inj A' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from injection where  name = 'Acentrix  Inj B' and office_id= '1' 
 Execution Time:0.00044822692871094

select count(*) as cnt from injection where  name = 'Botox Inj A' and office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from injection where  name = 'Botox Inj B' and office_id= '1' 
 Execution Time:0.00086283683776855

select count(*) as cnt from injection where  name = 'Ozurdex Inj' and office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from injection where  name = 'PST  -Inj' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from injection where  name = 'Pagenax Inj' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from refraction_master where  name = '-0.25' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00082707405090332

select count(*) as cnt from refraction_master where  name = '-0.50' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00092411041259766

select count(*) as cnt from refraction_master where  name = '-0.50' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from refraction_master where  name = '-0.75' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from refraction_master where  name = '-0.75' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00055909156799316

select count(*) as cnt from refraction_master where  name = '-1.00' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from refraction_master where  name = '-1.00' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from refraction_master where  name = '-1.25' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from refraction_master where  name = '-1.25' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00047183036804199

select count(*) as cnt from refraction_master where  name = '-1.50' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00039482116699219

select count(*) as cnt from refraction_master where  name = '-1.50' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.0013611316680908

select count(*) as cnt from refraction_master where  name = '-1.75' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from refraction_master where  name = '-1.75' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00062918663024902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010311603546143

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010311603546143

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.00028491020202637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from refraction_master where  name = '-2.00' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from refraction_master where  name = '-2.00' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from refraction_master where  name = '-2.25' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from refraction_master where  name = '-2.25' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.0012590885162354

select count(*) as cnt from refraction_master where  name = '-2.50' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from refraction_master where  name = '-2.50' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00053691864013672

select count(*) as cnt from refraction_master where  name = '-2.75' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.0014550685882568

select count(*) as cnt from refraction_master where  name = '-2.75' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from refraction_master where  name = '-3.00' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from refraction_master where  name = '-3.00' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00058579444885254

select count(*) as cnt from refraction_master where  name = '-3.25' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00064206123352051

select count(*) as cnt from refraction_master where  name = '-3.25' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from refraction_master where  name = '-3.50' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from refraction_master where  name = '-3.50' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.0019388198852539

select count(*) as cnt from refraction_master where  name = '-0.50' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from refraction_master where  name = '-0.50' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from refraction_master where  name = '-0.75' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from refraction_master where  name = '-0.75' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.0013868808746338

select count(*) as cnt from refraction_master where  name = '-1.00' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from refraction_master where  name = '-1.00' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from refraction_master where  name = '-1.25' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00054216384887695

select count(*) as cnt from refraction_master where  name = '-1.25' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00051712989807129

select count(*) as cnt from refraction_master where  name = '-1.50' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.0031609535217285

select count(*) as cnt from refraction_master where  name = '-1.50' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from refraction_master where  name = '-1.75' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from refraction_master where  name = '-1.75' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from refraction_master where  name = '-2.00' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.0033278465270996

select count(*) as cnt from refraction_master where  name = '-2.00' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from refraction_master where  name = '10' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from refraction_master where  name = '10' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00057196617126465

select count(*) as cnt from refraction_master where  name = '15' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00065493583679199

select count(*) as cnt from refraction_master where  name = '15' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from refraction_master where  name = '20' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from refraction_master where  name = '20' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00083398818969727

select count(*) as cnt from refraction_master where  name = '25' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0034639835357666

select count(*) as cnt from refraction_master where  name = '25' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from refraction_master where  name = '30' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from refraction_master where  name = '35' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from refraction_master where  name = '40' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from refraction_master where  name = '40' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085091590881348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085091590881348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085091590881348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012421607971191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085091590881348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012421607971191

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017709732055664

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011341571807861

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010659694671631

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00085091590881348

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086092948913574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012421607971191

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select count(*) as cnt from refraction_master where  name = '35' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00076413154602051

select count(*) as cnt from refraction_master where  name = '30' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from refraction_master where  name = '45' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00056195259094238

select count(*) as cnt from refraction_master where  name = '45' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0036230087280273

select count(*) as cnt from refraction_master where  name = '50' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0013020038604736

select count(*) as cnt from refraction_master where  name = '50' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from refraction_master where  name = '55' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from refraction_master where  name = '55' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0019199848175049

select count(*) as cnt from refraction_master where  name = '60' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from refraction_master where  name = '60' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0033800601959229

select count(*) as cnt from refraction_master where  name = '65' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from refraction_master where  name = '65' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00056123733520508

select count(*) as cnt from refraction_master where  name = '70' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from refraction_master where  name = '70' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0020661354064941

select count(*) as cnt from refraction_master where  name = '75' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00047588348388672

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0032792091369629

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.0041110515594482

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00064182281494141

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.001680850982666

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.0031840801239014

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0008399486541748

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.0038571357727051

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.003939151763916

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.013944864273071

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.0099430084228516

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.0018701553344727

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00098705291748047

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0032792091369629

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.0041110515594482

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00064182281494141

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.001680850982666

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.0031840801239014

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0008399486541748

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.0038571357727051

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.003939151763916

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.013944864273071

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.0099430084228516

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.0018701553344727

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00098705291748047

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0010478496551514

select count(*) as cnt from refraction_master where  name = '75' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00053286552429199

select count(*) as cnt from refraction_master where  name = '80' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from refraction_master where  name = '80' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from refraction_master where  name = '85' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from refraction_master where  name = '85' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0015671253204346

select count(*) as cnt from refraction_master where  name = '90' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from refraction_master where  name = '90' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from refraction_master where  name = '95' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from refraction_master where  name = '95' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from refraction_master where  name = '100' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.003486156463623

select count(*) as cnt from refraction_master where  name = '100' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from refraction_master where  name = '105' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from refraction_master where  name = '105' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from refraction_master where  name = '110' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00052785873413086

select count(*) as cnt from refraction_master where  name = '110' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00083518028259277

select count(*) as cnt from refraction_master where  name = '115' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0017848014831543

select count(*) as cnt from refraction_master where  name = '115' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from refraction_master where  name = '120' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from refraction_master where  name = '120' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from refraction_master where  name = '125' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from refraction_master where  name = '125' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from refraction_master where  name = '130' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from refraction_master where  name = '130' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '6' and office_id= '1' 
 Execution Time:0.00065708160400391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030519962310791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022292137145996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030519962310791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022292137145996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030519962310791

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0022292137145996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083112716674805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00069189071655273

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.0040369033813477

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014431476593018

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001474142074585

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001474142074585

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.0035910606384277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 182 
 Execution Time:0.00083208084106445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011970996856689

select * from examination where examination_id= '56' and   office_id= '1' 
 Execution Time:0.0052099227905273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016419887542725

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 56 
 Execution Time:0.0013649463653564

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.0034749507904053

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034301280975342

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034301280975342

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0035688877105713

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054478645324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 145 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 181 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.011420965194702

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.011420965194702

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.011420965194702

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 145 
 Execution Time:0.00048708915710449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 181 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00058984756469727

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.00049901008605957

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00016212463378906

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00055289268493652

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00018000602722168

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00038909912109375

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.00061988830566406

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.0015699863433838

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.00063896179199219

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.00068998336791992

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.0006859302520752

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00026202201843262

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00058984756469727

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.00049901008605957

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00016212463378906

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00055289268493652

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00018000602722168

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00038909912109375

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.00061988830566406

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.0015699863433838

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.00063896179199219

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.00068998336791992

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.0006859302520752

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00026202201843262

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00031900405883789

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0008699893951416

SELECT *
FROM `examination`
WHERE `examination_id` = 56 
 Execution Time:0.00060892105102539

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00032687187194824

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00024509429931641

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=56 
 Execution Time:0.00075411796569824

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=56 
 Execution Time:0.0012509822845459

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=56 
 Execution Time:0.00087809562683105

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=56 
 Execution Time:0.00037002563476562

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='56' and office_id='1' 
 Execution Time:0.00049686431884766

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.00035810470581055

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0008699893951416

SELECT *
FROM `examination`
WHERE `examination_id` = 56 
 Execution Time:0.00060892105102539

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00032687187194824

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00024294853210449

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00024509429931641

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=56 
 Execution Time:0.00075411796569824

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=56 
 Execution Time:0.0012509822845459

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=56 
 Execution Time:0.00087809562683105

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=56 
 Execution Time:0.00037002563476562

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='56' and office_id='1' 
 Execution Time:0.00049686431884766

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.00035810470581055

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00026392936706543

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00066018104553223

SELECT *
FROM `examination`
WHERE `examination_id` = 56 
 Execution Time:0.00088310241699219

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00043702125549316

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0017530918121338

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.0026021003723145

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0011520385742188

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=56 
 Execution Time:0.00081586837768555

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=56 
 Execution Time:0.00069594383239746

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=56 
 Execution Time:0.00065493583679199

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=56 
 Execution Time:0.00055813789367676

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='56' and office_id='1' 
 Execution Time:0.00049400329589844

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.00029802322387695

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00066018104553223

SELECT *
FROM `examination`
WHERE `examination_id` = 56 
 Execution Time:0.00088310241699219

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00043702125549316

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0017530918121338

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.0026021003723145

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0011520385742188

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=56 
 Execution Time:0.00081586837768555

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=56 
 Execution Time:0.00069594383239746

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=56 
 Execution Time:0.00065493583679199

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=56 
 Execution Time:0.00055813789367676

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='56' and office_id='1' 
 Execution Time:0.00049400329589844

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.00029802322387695

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00034880638122559

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00042009353637695

SELECT *
FROM `examination`
WHERE `examination_id` = 56 
 Execution Time:0.00062298774719238

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00023293495178223

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00065422058105469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=56 
 Execution Time:0.0008399486541748

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=56 
 Execution Time:0.00077199935913086

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=56 
 Execution Time:0.00064897537231445

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=56 
 Execution Time:0.00040197372436523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='56' and office_id='1' 
 Execution Time:0.0011169910430908

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.00024104118347168

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00042009353637695

SELECT *
FROM `examination`
WHERE `examination_id` = 56 
 Execution Time:0.00062298774719238

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00023293495178223

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 146 
 Execution Time:0.00022196769714355

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00065422058105469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=56 
 Execution Time:0.0008399486541748

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=56 
 Execution Time:0.00077199935913086

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=56 
 Execution Time:0.00064897537231445

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=56 
 Execution Time:0.00040197372436523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='56' and office_id='1' 
 Execution Time:0.0011169910430908

select * from examination_chargesdetails where  examination_id= '56' 
 Execution Time:0.00024104118347168

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00037717819213867

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00046801567077637

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.0011849403381348

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.0076789855957031

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0018680095672607

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00040602684020996

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0016660690307617

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.00075793266296387

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.0006871223449707

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.00058507919311523

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.00056099891662598

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.00058698654174805

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00038695335388184

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00046801567077637

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.0011849403381348

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.0076789855957031

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0018680095672607

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00040602684020996

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0016660690307617

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.00075793266296387

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.0006871223449707

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.00058507919311523

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.00056099891662598

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.00058698654174805

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00038695335388184

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00033712387084961

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 183 
 Execution Time:0.00047206878662109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005800724029541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005800724029541

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003211498260498

select * from examination where examination_id= '55' and   office_id= '1' 
 Execution Time:0.00085186958312988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 55 
 Execution Time:0.00057291984558105

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00051188468933105

select * from examination where examination_id= '55' and   office_id= '1' 
 Execution Time:0.00085186958312988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 55 
 Execution Time:0.00057291984558105

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00051188468933105

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00030398368835449

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041604042053223

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.00055503845214844

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00017213821411133

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00014591217041016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00023603439331055

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.00062108039855957

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.00055694580078125

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.0017797946929932

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.00044107437133789

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.00055098533630371

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00028800964355469

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041604042053223

SELECT *
FROM `examination`
WHERE `examination_id` = 55 
 Execution Time:0.00055503845214844

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00017213821411133

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00014591217041016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 147 
 Execution Time:0.00024604797363281

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00023603439331055

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=55 
 Execution Time:0.00062108039855957

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=55 
 Execution Time:0.00055694580078125

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=55 
 Execution Time:0.0017797946929932

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=55 
 Execution Time:0.00044107437133789

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='55' and office_id='1' 
 Execution Time:0.00055098533630371

select * from examination_chargesdetails where  examination_id= '55' 
 Execution Time:0.00028800964355469

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select * from office where  office_id= '1' 
 Execution Time:0.00059318542480469

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.011435031890869

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.011435031890869

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '', `mrd_code_no` = 'ABY', `youtube` = '', `website` = '', `facebook` = '', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = 'nabhlogo.png', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.0031700134277344

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0024161338806152

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0029149055480957

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049614906311035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060105323791504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079679489135742

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00048995018005371

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0010039806365967

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059700012207031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091290473937988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008399486541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0049829483032227

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0049829483032227

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0043699741363525

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0049829483032227

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0043699741363525

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00076699256896973

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 184 
 Execution Time:0.00041484832763672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 148 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 184 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select * from examination where examination_id= '57' and   office_id= '1' 
 Execution Time:0.0010249614715576

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 57 
 Execution Time:0.012778997421265

select * from examination_chargesdetails where  examination_id= '57' 
 Execution Time:0.0030450820922852

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080204010009766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080204010009766

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071191787719727

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078892707824707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043606758117676

select * from investigation where  investigation_id=11  and office_id= 1 and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032839775085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032839775085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032839775085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032839775085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016059875488281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032839775085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016059875488281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038051605224609

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032839775085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011358261108398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016059875488281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013411045074463

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00017905235290527

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051784515380859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017209053039551

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015749931335449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017209053039551

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015749931335449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016689300537109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017209053039551

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015749931335449

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0016689300537109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.0007789134979248

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from refraction_master where  name = '1' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00061392784118652

select count(*) as cnt from refraction_master where  name = '16' and eye_type  = '1' and ref_type  = '1' AND refraction_type = '1' and office_id= '1' 
 Execution Time:0.0033409595489502

select count(*) as cnt from refraction_master where  name = '3' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '4' and office_id= '1' 
 Execution Time:0.00047016143798828

select count(*) as cnt from refraction_master where  name = '3' and eye_type  = '1' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00069093704223633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090789794921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.0010390281677246

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 185 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select count(*) as cnt from refraction_master where  name = '1.2' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from refraction_master where  name = '65' and eye_type  = '2' and ref_type  = 0 AND refraction_type = '5' and office_id= '1' 
 Execution Time:0.00046396255493164


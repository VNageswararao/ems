select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001356840133667

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001356840133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001356840133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001356840133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001356840133667

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010309219360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00073885917663574

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select count(*) as cnt from billing_master where  billing_master_id= '10' and  office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from billing_master where  billing_master_id= '10' and  office_id= '1' 
 Execution Time:0.00038504600524902

select * from billing_master where  billing_master_id= '10' and  office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from billing_master where  billing_master_id= '10' and  office_id= '1' 
 Execution Time:0.00038504600524902

select * from billing_master where  billing_master_id= '10' and  office_id= '1' 
 Execution Time:0.00023007392883301

select * from billing_detail where  billing_master_id= '10' 
 Execution Time:0.0019600391387939

select count(*) as cnt from billing_master where  billing_master_id= '10' and  office_id= '1' 
 Execution Time:0.00038504600524902

select * from billing_master where  billing_master_id= '10' and  office_id= '1' 
 Execution Time:0.00023007392883301

select * from billing_detail where  billing_master_id= '10' 
 Execution Time:0.0019600391387939

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00089597702026367

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0002131462097168

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00052714347839355

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00052714347839355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017390251159668

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00052714347839355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017390251159668

select fname,lname,mrdno from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00022602081298828

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021331310272217

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021331310272217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021331310272217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021331310272217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021331310272217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031509399414062

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0039429664611816

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0039200782775879

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00030779838562012

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00030779838562012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00094699859619141

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00030779838562012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.00094699859619141

select fname,lname,mrdno from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00018882751464844

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00040292739868164

select patient_registration_id,barcode from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00021195411682129

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00030207633972168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_registration where  patient_registration_id= '6' and  office_id= '1' 
 Execution Time:0.00030207633972168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='6' and  doctors_registration.office_id= '1' 
 Execution Time:0.00049591064453125

select fname,lname,mrdno from patient_registration where  patient_registration_id='6' and  office_id= '1' 
 Execution Time:0.00019097328186035

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014410018920898

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014410018920898

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027179718017578

select * from opdcharge where  opdcharge_id=10  and office_id= 1 and status=1 
 Execution Time:0.00047183036804199

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00045013427734375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00045013427734375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00063300132751465

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031518936157227

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068283081054688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select * from office where  office_id= '1' 
 Execution Time:0.00054788589477539

select * from office where  office_id= '1' 
 Execution Time:0.000762939453125

select * from office where  office_id= '1' 
 Execution Time:0.00039792060852051

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052471160888672

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052471160888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052471160888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052471160888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027608871459961

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052471160888672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028681755065918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023598670959473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0027608871459961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.003007173538208

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020480155944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020480155944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020480155944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098919868469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020480155944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098919868469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020480155944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098919868469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020480155944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098919868469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027191638946533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015280246734619

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020480155944824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017459392547607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00098919868469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019078254699707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00099515914916992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027191638946533

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057578086853027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00052285194396973

select * from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00026607513427734

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00052285194396973

select * from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00026607513427734

select * from billing_detail where  billing_master_id= '11' 
 Execution Time:0.00028586387634277

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00052285194396973

select * from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00026607513427734

select * from billing_detail where  billing_master_id= '11' 
 Execution Time:0.00028586387634277

select * from opdcharge where  opdcharge_id=12  and office_id= 1 and status=1 
 Execution Time:0.0002288818359375

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0005950927734375

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0005950927734375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.0005950927734375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3' and  doctors_registration.office_id= '1' 
 Execution Time:0.00045299530029297

select fname,lname,mrdno from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.00017404556274414

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00094914436340332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00085878372192383

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016899108886719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012710094451904

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011858940124512

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090718269348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016899108886719

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096917152404785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048089027404785

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048303604125977

select patient_registration_id,mrdno from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

